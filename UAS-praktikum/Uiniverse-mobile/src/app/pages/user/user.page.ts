import { Component, OnInit, ViewChild } from '@angular/core';
import { IonSlides, PopoverController } from '@ionic/angular';
import { ActivatedRoute } from '@angular/router';
import { GnService } from '../../services/gn.service';
import { PostActionComponent } from './post-action/post-action.component';

@Component({
  selector: 'app-user',
  templateUrl: './user.page.html',
  styleUrls: ['./user.page.scss'],
})
export class UserPage implements OnInit {
  profile:any={
    img:null
  };
  profil:any=[];
  marketplace:any=[];
  forum:any=[];
  socmed:any = {tel:"",ig:"", em:""};

  dis:any={
    profile:{},
    marketplace:{},
    forum:{}
  };
  @ViewChild('slides', {static:false}) slides:IonSlides;
  
  constructor(private activatedRoute: ActivatedRoute, private popoverController:PopoverController, private gn:GnService) { }

  ngOnInit() {
    var p=this.activatedRoute.snapshot.paramMap.get('id');
    
    this.gn.hhGet("user_profile?id="+p, data=>{
      this.dis.profile = data.dis;
      if(data.stat == true){
        let d = data.data[0];
        this.socmed.tel = "https://wa.me/"+this.profile.tel;
        this.profile.img = d.img;
        this.profile.name = this.gn.cData(d.name, "Profil Pengguna");
        this.profile.username = this.gn.cData(d.username, "pengguna");
        this.profile.information = this.gn.cData(d.information, "-");
        this.profile.bio = this.gn.cData(d.bio, "Tidak ada keterangan");
        this.profile.address = this.gn.cData(d.address, "Tidak ada keterangan");
        this.socmed.tel = this.gn.cData("https://wa.me/"+d.tel, "no");
        this.socmed.ig = this.gn.cData("https://instagram.com/"+d.ig, "no");
        this.socmed.em = this.gn.cData("mailto:"+d.em, "no");
      }
    });
  }

  send(url){
    window.open(url, '_blank');
  }

  async postAction(ev: any, id) {
    const popover = await this.popoverController.create({
      component: PostActionComponent,
      componentProps: {
        id:id
      },
      event: ev,
      translucent: true
    });
    popover.onDidDismiss().then(()=>{
      this.ngOnInit();
      this.mp();
      this.fr();
    })
    return await popover.present();
    
  }

  userClick(id, ur){
    let a = this.forum.findIndex((obj => obj.id == id));
      this.forum[a].views = parseInt(this.forum[a].views)+1;

    this.gn.hhGet("posts/user_click?post_id="+id, dt=>{
    }, "", false)

    this.gn.pagesNavigate(ur);
  }

  ionViewDidEnter(){
    this.slide(0);  
    this.slides.update();
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ngOnInit();
      this.mp();
      this.fr();
      event.target.complete();
    }, 100);
  }

  slide(slide=0){
    this.gn.sliderDis();
    this.slides.slideTo(slide).then(()=>{ 
      if(slide == 0) this.fr();
      if(slide == 1) this.mp();
    });
  }

  mp(){
    this.gn.hhGet("marketplace/user?id="+this.activatedRoute.snapshot.paramMap.get('id'), (data)=>{
      this.dis.marketplace = data.dis;
      if(data.stat) this.marketplace = data.data;
    })
  }

  fr(){
    this.gn.hhGet("posts/user?id="+this.activatedRoute.snapshot.paramMap.get('id'), (data)=>{
      this.dis.forum = data.dis;
      if(data.stat) this.forum = data.data;
    })
  }

  detail(id){
    this.gn.pagesNavigate('forum/detail/'+id);
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

  editPost(id){
    this.gn.pagesNavigate('forum/edit/'+id);
  }

}
