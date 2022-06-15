import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../../services/gn.service';
import { ActivatedRoute } from '@angular/router';


@Component({
  selector: 'app-add',
  templateUrl: './add.page.html',
  styleUrls: ['./add.page.scss'],
})
export class AddPage implements OnInit {

  judul = "Tambah Item";
  mode = "add";
  todo:any={};

  imageDisplay: any;
  imgPrev:any=[];
  dis={
    url:{
      display:"none"
    }
  }
  rIm:any=[];

  constructor(private activatedRoute: ActivatedRoute, private gn:GnService) { }

  ngOnInit() {
  }

  
  ionViewDidEnter(){
    this.rIm = [];
    this.todo = {};
    this.todo.images = [];
    this.imgPrev=[];

    var id = this.activatedRoute.snapshot.paramMap.get('id');
    if(id){
      this.judul = "Update Item";
      this.mode = "edit";
      this.gn.hhGet("marketplace?id="+id, data=>{
        if(data.stat){
          let a = data.data[0];
          this.todo = a;
          if(a.images){
            let im = JSON.parse(a.images);
  
            im.forEach(x => {
              this.imgPrev.push(this.gn._base+"images/marketplace/"+x)
            });

            this.todo.images = [];
          }
        }
       
      })
    }
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


  rmImg(im){
    this.imgPrev.splice(this.imgPrev.indexOf(im), 1)
    if(im.src){
      this.todo.images.splice(this.todo.images.indexOf(im), 1);
    } else{
      this.rImg(im.split('marketplace/')[1]);
    }
  }

  rp(e){
    this.todo.price = this.gn.rupiah(e.target.value, 'Rp ');
  }

  rImg(im){
    this.rIm.push(im);
  }

  logForm() {
    let d:any={};
    let fd = new FormData();

    if(this.mode == 'edit'){
      fd.append('id', this.todo.id);
      fd.append('title', this.todo.title);
      fd.append('price', this.todo.price);
      fd.append('location', this.todo.location);
      fd.append('description', this.todo.description);
      fd.append('rmImg', JSON.stringify(this.rIm));
      
      fd.append('lengthIm', this.todo.images.length);
      
      if(this.todo.images.length > 0){
        for(var i = 0; i<this.todo.images.length; i++){
          fd.append('images'+i, this.todo.images[i], i+"9"+this.gn._id+"6"+new Date().getTime()+".jpg");
        }
      }
      d.data = fd;
      d.load = "Mengupdate Item";
      d.err = "Gagal mengedit item";

      this.gn.hhPost("marketplace/mp", d, data=>{
        if(data) this.pagesNavigate('marketplace/list');
      })

      // console.log(JSON.stringify(this.rIm))
      
    }
    else{


      fd.append('title', this.todo.title);
      fd.append('price', this.todo.price);
      fd.append('location', this.todo.location);
      fd.append('description', this.todo.description);
      
      fd.append('lengthIm', this.todo.images.length);
      
      if(this.todo.images.length > 0){
        for(var i = 0; i<this.todo.images.length; i++){
          fd.append('images'+i, this.todo.images[i], i+"9"+this.gn._id+"6"+new Date().getTime()+".jpg");
        }
      }

      d.data = fd;
      d.load = "Menambah Item";
      d.err = "Gagal menambah item";

      this.gn.hhPost("marketplace", d, (data)=>{
        if(data) this.pagesNavigate('marketplace/list');
      })
    }
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

}
