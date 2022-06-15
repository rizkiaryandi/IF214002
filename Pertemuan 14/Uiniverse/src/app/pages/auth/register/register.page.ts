import { Component, OnInit, ViewChild } from '@angular/core';
import { IonSlides } from '@ionic/angular';
import { GnService } from '../../../services/gn.service';
import { ActionService } from '../../../services/auth/action.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.page.html',
  styleUrls: ['./register.page.scss'],
})
export class RegisterPage implements OnInit {

  @ViewChild('slides', {static:true}) slides:IonSlides;

  slideOptions = {
    initialSlide: 0,
    slidesPerView : 1,
    speed: 500,
  };

  data = {
    username:"",
    password:""
  };
  ds = ["true", "true"]
  ket = "Buat akun Uiniverse kurang dari 30 detik";
  spin = {
    display:"none"
  }
  dt;

  constructor(public gn:GnService, public actionService:ActionService) { }

  ngOnInit() {
  }

  regForm(){
    this.actionService.register(this.data);
  }

  nextS(val){
    switch(val){
      case 0: this.ket = "Buat akun Uiniverse kurang dari 25 detik"; break;
      case 1: this.ket = "Selesaikan pendaftaran!"; break;
      default: this.ket = "Buat akun Uiniverse kurang dari 30 detik";
    }
    this.slides.slideTo(val);
  }

  inUsername(){
    if(this.data.username.length >= 3 && /^[a-zA-Z0-9_.]+$/.test(this.data.username) && !this.data.username.split(' ')[1]){
      this.spin.display = "block";
      setTimeout(()=>{
        this.gn.httpGet(this.gn._url+"auth/username?username="+this.data.username).subscribe(data =>{
          this.spin.display = "none";
          if(data == true){
            this.ket = "Username tersedia";
            this.ds[0] = "false";
          }
          else{
            this.ds[0] = "true";
            this.ket = "Username sudah dipakai pengguna lain";
          }
        });
      }, 500);
    }
    else{
      this.ds[0] = "true";
      this.ket = "Minimal 3 karakter untuk nama pengguna dan tidak ada simbol selain titik dan garis bawah";
    }
  }

  inPassword(){
    if(this.data.password.length >= 8) this.ds[1] = "false";
    else{
      this.ket = "Minimal 8 karakter untuk kata sandi";
      this.ds[1] = "true";
    }
  }

}
