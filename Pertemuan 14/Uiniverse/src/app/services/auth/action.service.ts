import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import { GnService } from '../gn.service';

@Injectable({
  providedIn: 'root'
})
export class ActionService {

  authState = new BehaviorSubject(false);
  a;
  constructor(private gn:GnService) {
      this.ifLoggedIn();
  }

  getInfo(ur="") {

    this.gn.defAddS('loga',true)
    this.gn.getS('USER_INFO').then(response => {
      if(response && response.token){

        this.authState.next(true);
        this.gn.token = response.token;
        this.gn._id = response.id;
        var n = new Date().getTime() / 1000;
        var timeClient = n+60*60*24*4;
        var timeServer = response.ex;
        if(timeClient > timeServer){
          this.gn.httpGet(this.gn._url+'auth/tokenRef').subscribe((data)=>{
            let a:any=data;
            this.gn.defAddS('USER_INFO', a).then(() => {
            this.gn.token = a.token;
            this.gn._id = a.id;
            if(ur == "") this.gn.pagesNavigate('open-landing');
            });
          },(err)=>{
            if(err){
              this.logout();
            }
          })
        }
        if(ur == "/") this.gn.pagesNavigate('open-landing');
        else this.gn.pagesNavigate(ur);
      }
      else this.gn.pagesNavigate('login');
    });
  }

  ifLoggedIn() {
    this.gn.getS('USER_INFO').then(response => {
      if(response && response.token){
        this.authState.next(true);
      }
    });
  }

  login(data) {
    this.gn.defAddS('loga',true)
    this.gn.loading("Proses Autentikasi").then(()=>{
      this.gn.httpPost(this.gn._url+"auth/login",data,[]).subscribe((dataa)=>{
        let a:any=dataa;
        this.gn.token = a.token;
        this.gn._id = a.id;
        this.gn.defAddS('USER_INFO', dataa).then(() => {
          this.gn.pagesNavigate('home');
          this.authState.next(true);
        });
        this.gn.disLoading();
      },
      (a) =>{

        console.log(a)
        this.gn.alert("Username/Password salah");
        this.gn.disLoading();
      });
    })

  }

  register(data) {
    this.gn.defAddS('loga',true)
    this.gn.loading("Proses Pendaftaran").then(()=>{

      this.gn.httpPost(this.gn._url+"auth/register",data,[]).subscribe(dataa=>{
        let a:any=dataa;
        this.gn.token = a.token;
        this.gn._id = a.id;
        this.gn.defAddS('USER_INFO', dataa).then(() => {
          this.gn.pagesNavigate('home');
          this.authState.next(true);
          this.gn.disLoading();
        });
      },(err)=>{
        this.gn.alert("Terjadi Kesalahan, silahkan melakukan pendaftaran ulang");
        this.gn.disLoading();
      })
    })
  }

  logout() {
    this.gn.defRmS('USER_INFO').then(() => {
      this.gn.pagesNavigate('login');
      this.authState.next(false);
    });
  }

  isAuthenticated() {
    return this.authState.value;
  }
}
