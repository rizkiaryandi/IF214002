import { Component, OnInit, ViewChild } from '@angular/core';
import { IonTextarea } from '@ionic/angular'
import { GnService } from '../../../../services/gn.service';
import { ActivatedRoute } from '@angular/router';
import { PopoverController } from '@ionic/angular';
import { CommentActionComponent } from './comment-action/comment-action.component';

@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage implements OnInit {

  public post:any=[];
  public comment:any=[];
  @ViewChild('area', {static:true}) area:IonTextarea;

  ps:any={};
  cm:any=[];
  commentIn:any="";

  dis:any={
    post:{},
    comment:{}
  };

  constructor(private activatedRoute: ActivatedRoute, public gn:GnService, private popoverController:PopoverController) { }

  ngOnInit() {

    this.gn.hhGet("posts?id="+this.activatedRoute.snapshot.paramMap.get('id'), data=>{
      this.dis.post = data.dis;
      if(data.stat){
        let d = data.data[0];
        this.ps = d;
      }
    })

    this.cmnts();

  }

  cmnts(){
    this.gn.hhGet("post_comments?id="+this.activatedRoute.snapshot.paramMap.get('id'), data=>{
      this.dis.comment = data.dis;
      if(data.stat){
        let d = data.data;
        this.cm = d;
      }
    })
  }

  ionViewDidEnter(){
    var kom = this.activatedRoute.snapshot.paramMap.get('kom');
    if(kom){
      if(kom =="ants"){
        this.kom();
      } else this.kom(kom);
    }
  }
  
  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  kom(val=""){
    this.commentIn = val;
    this.write();
    
  }

  async commentAction(ev: any, id) {
    const popover = await this.popoverController.create({
      component: CommentActionComponent,
      componentProps: {
        id:id
      },
      event: ev,
      translucent: true
    });
    await popover.present();
    popover.onDidDismiss().then(()=>{
      this.ngOnInit();
    })
  }
  
  addComment(){
    let dt:any={
      data:{}
    };
    dt.data.text = this.commentIn;
    dt.data.post_id = this.activatedRoute.snapshot.paramMap.get('id');
    dt.load = "Menambah Komentar";
    dt.err = "Gagal Menambah Komentar";
    this.gn.hhPost("post_comments", dt, (data)=>{
      if(data){
        this.cmnts();
        this.commentIn="";
      }
    })
  }

  write(){
    this.area.setFocus();
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ngOnInit();
      this.ionViewDidEnter();
      event.target.complete();
    }, 100);
  }

  refresh(){
    this.ngOnInit();
    this.ionViewDidEnter();
  }

}
