import { Component, OnInit } from '@angular/core';
import { Camera, CameraOptions } from '@ionic-native/Camera/ngx';
import { File } from '@ionic-native/file/ngx';
import { ActionSheetController } from '@ionic/angular';
import { GnService } from '../../../../services/gn.service';


@Component({
  selector: 'app-add',
  templateUrl: './add.page.html',
  styleUrls: ['./add.page.scss'],
})
export class AddPage implements OnInit {

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

  constructor(private camera: Camera,
    public actionSheetController: ActionSheetController,
    private file: File, public gn:GnService) { }


  todo:any={
    images:[]
  };
  ngOnInit() {
  }
  ionViewDidEnter(){
    this.todo = {};
    this.todo.images = [];
    this.imgPrev=[];
  }

  sImage(input){
    const reader = new FileReader();
    reader.onload = (e) =>{
      let img:any= new Image();

      img.onload = function() {
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        canvas.width = 250;
        canvas.height = canvas.width * (img.height / img.width);
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      }
      img.src = e.target.result;
      this.imgPrev.push(img)
    }
    

    this.todo.images.push(input.target.files[0])
    reader.readAsDataURL(input.target.files[0]);
  }

  rmImg(id){
    this.imgPrev.splice(id, 1)
    this.todo.images.splice(id, 1);
  }

  disC(){
    this.dis.url.display = "block";
  }

  logForm() {
    let dt:any={};
    const fd = new FormData();
    this.todo.type = "post";
    
    fd.append('type', this.todo.type);
    fd.append('text', this.todo.text);
    fd.append('url', this.todo.url);
    fd.append('lengthIm', this.todo.images.length);
    
    if(this.todo.images.length > 0){
      for(var i = 0; i<this.todo.images.length; i++){
        fd.append('images'+i, this.todo.images[i], i+"9"+this.gn._id+"6"+new Date().getTime()+".jpg");
      }
    }


    dt.data = fd;
    dt.load = "Mengupload";
    dt.err = "Gagal mengupload postingan";


    this.gn.hhPost("posts", dt, (data)=>{
      if(data){
        this.gn.pagesNavigate("user/"+this.gn._id);
        
        this.todo = {};
        this.imgPrev=[];
      }

    })

  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  pickImage(sourceType) {
    const options: CameraOptions = {
      quality: 100,
      sourceType: sourceType,
      destinationType: this.camera.DestinationType.DATA_URL,
      encodingType: this.camera.EncodingType.JPEG,
      mediaType: this.camera.MediaType.PICTURE
    }
    this.camera.getPicture(options).then((imageData) => {
      // imageData is either a base64 encoded string or a file URI
      this.croppedImagePath = 'data:image/jpeg;base64,' + imageData;
    }, (err) => {
      console.log(err)
    });
  }

  async selectImage() {
    const actionSheet = await this.actionSheetController.create({
      header: "Select Image source",
      mode:"ios",
      buttons: [{
        text: 'Load from Library',
        handler: () => {
          this.pickImage(this.camera.PictureSourceType.PHOTOLIBRARY);
        }
      },
      {
        text: 'Use Camera',
        handler: () => {
          this.pickImage(this.camera.PictureSourceType.CAMERA);
        }
      },
      {
        text: 'Cancel',
        role: 'cancel'
      }
      ]
    });
    await actionSheet.present();
  }

}
