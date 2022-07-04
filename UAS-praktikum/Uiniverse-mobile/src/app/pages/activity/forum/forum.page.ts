import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';

@Component({
  selector: 'app-forum',
  templateUrl: './forum.page.html',
  styleUrls: ['./forum.page.scss'],
})
export class ForumPage implements OnInit {

  public profile:any={img:null};

  public users:any=[];

  public post:any=[];

  dis:any={
    users:{},
    post:{}
  };

  constructor(public gn:GnService) { }

  ngOnInit(met = false) {
    if(this.profile.length == 0 || this.users.length == 0 || this.post.length == 0 || met == true){
      this.profile.img = null;
      this.gn.hhGet("user_profile", data=>{
        this.dis.users = data.dis;
        if(data.stat){
          this.users = this.gn._shuf(data.data);
        }
      })

      this.gn.hhGet("user_profile?id=ynd_profile", data=>{
        if(data.stat){
          this.profile = data.data[0];
        }
      })

      this.gn.hhGet("posts", data=>{
        this.dis.post = data.dis;
        if(data.stat){
          this.post = this.gn._shuf(data.data);
        }
      })
    }
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  userClick(id, ur){
    let a = this.post.findIndex((obj => obj.id == id));
      this.post[a].views = parseInt(this.post[a].views)+1;

    this.gn.hhGet("posts/user_click?post_id="+id, dt=>{
    }, "", false)

    this.gn.pagesNavigate(ur);
  }

  like(id){
    this.post.find(x => x.id === id).like.val +=1;
    this.post.find(x => x.id === id).like.stat =1;
  }

  openUrl(url){
    window.open(url, '_blank');
  }
  
  unlike(id){
    this.post.find(x => x.id === id).like.val -=1;
    this.post.find(x => x.id === id).like.stat =0;
  }

  detail(id){
    this.gn.pagesNavigate('forum/detail/'+id);
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ngOnInit(true);
      event.target.complete();
    }, 100);
  }

  refresh(){
    this.ngOnInit(true);
  }

  

  abs(text, length) {
    if (text == null) {
        return "";
    }
    if (text.length <= length) {
        return text;
    }

    else{
      text = text.substring(0, length);

      return text + "   (Lihat Lebih Banyak)";
    }
  }
}
