import { Component, OnInit } from '@angular/core';
import { Camera, CameraOptions } from '@ionic-native/Camera/ngx';
import { File } from '@ionic-native/file/ngx';
import { ActionSheetController } from '@ionic/angular';
import { GnService } from '../../../../services/gn.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-edit',
  templateUrl: './edit.page.html',
  styleUrls: ['./edit.page.scss'],
})
export class EditPage implements OnInit {

  croppedImagePath = "";
  isLoading = false;

  imagePickerOptions = {
    maximumImagesCount: 1,
    quality: 50
  };

  
  imageDisplay: any;
  imgPrev:any=[];
  dis={
    url:{
      display:"none"
    }
  }

  pr = this.activatedRoute.snapshot.paramMap.get('id');

  constructor(private camera: Camera,
    public actionSheetController: ActionSheetController,
    private file: File, public gn:GnService, private activatedRoute: ActivatedRoute) { }


  todo:any={
    images:[]
  };
  ngOnInit() {
    
  }
  ionViewDidEnter(){
    this.todo = {};

    this.gn.hhGet("posts/apost?id="+this.pr,(data)=>{
      if(data){
        this.todo = data;
      }
    },'', false);
  }


  logForm() {
    let dt:any={};
    const fd = new FormData();
    let e:any={
      id:this.todo.id,
      text:this.todo.text
    }
    dt.data = e;
    dt.load = "Mengedit Postingan";
    dt.err = "Gagal mengupload postingan";


    this.gn.hhPost("posts/d", dt, (data)=>{
      if(data){
        this.gn.pagesNavigate("forum");
        this.todo = {};
        this.imgPrev=[];
      }

    })

  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

}
