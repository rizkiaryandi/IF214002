import { Injectable } from '@angular/core';
import { Router, NavigationEnd } from '@angular/router';
import { Location } from '@angular/common';
import { ToastController, AlertController, LoadingController } from '@ionic/angular';
import { Storage } from '@ionic/storage';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class GnService {

  public token:any="";
  public _id:any= "";
  public _url:any= "https://rest.uiniverse.yandmedia.id/api/";
  public _base:any= "https://rest.uiniverse.yandmedia.id/";
  // public _url:any= "http://localhost/uiniverse/api/";
  // public _base:any= "http://localhost/uiniverse/";

  public _user:any;
  constructor(
    public router:Router, 
    private location: Location,
    private toastController: ToastController, 
    private storage: Storage,
    private alertController: AlertController,
    public http:HttpClient,
    private loadingController: LoadingController
  ) {
    if(this.token == ""){
      this.getS('USER_INFO').then(response => {
        if(response && response.token){
          this.token = response.token;
        }
      })
    }
  }

  //Pages
  public pagesNavigate(url){
    return this.router.navigateByUrl(url);
  }

  public pagesBack() {
    this.location.back();
  }

  public refresh(event, callback, time){
    setTimeout(() => {
      callback();
      event.target.complete();
    }, time);
  }





  //features
  public async alert(text) {
    const toast = await this.toastController.create({
      message: text,
      duration: 2000
    });
    toast.present();
  }

  public async loading(text){
    const loading = await this.loadingController.create({
      message: text,
      spinner:'bubbles',
      translucent: true,
      backdropDismiss: true,
      mode: "ios"
    });
    return loading.present();
  }

  public disLoading(){
    this.loadingController.dismiss();
  }
  





  //Local Storage
  public getS(name){
    // this.storage.clear()
    return this.storage.get(name);
  }
  public addS(name, arr){
    arr['_yCreated_at'] = new Date().toLocaleString();
    arr['_id'] = this._id;
    this.getS(name).then(data=>{
      if(data != null){
        data.push(arr);
        this.storage.set(name, data).then(
          () => this.alert("Berhasil menambah "+name)
        );
      }
      else{
        this.storage.set(name, [arr]).then(
          () => this.alert("Berhasil menambah "+name)
        );
      }
    })
  }

  public defAddS(name, arr){
    return this.storage.set(name, arr);
  }

  public editS(name, id, newArr){
    this.getS(name).then(data=>{
      let d = data.filter(x=> x._id === this._id);
      let index = d.findIndex((obj => obj.id == id));
      data[index] = newArr;
      this.storage.set(name, data).then(
        () => this.alert("Berhasil mengedit "+name)
      );
    });
  }

  public async deleteS(name, id){
    this.getS(name).then(data=>{
      let d = data.filter(x=> x._id === this._id);
      let index = d.findIndex((obj => obj.id == id));
      if (index > -1) {
        data.splice(index, 1);
        this.storage.set(name, data).then(
          () => this.alert("Menghapus "+name)
        )
      }
    });
  }

  public defRmS(name){
    return this.storage.remove(name);
  }

  public async confirm(text:any, callback){
    const alert = await this.alertController.create({
      cssClass: 'alert-del',
      mode:"ios",
      header: text.title,
      message: text.message,
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel',
          cssClass: 'secondary',
        }, {
          text: text.mode,
          role: 'mode',
          handler: () => {
            callback()
          }
        }
      ]
    });

    await alert.present();

    return alert.onDidDismiss();
  }






  // Http

  public httpGet(url, options = {}){
    return this.http.get(url, options);
  }

  public httpPost(url, data, options = {}){
    return this.http.post(url, data);
  }






  // Display
  public activeDis(){
    return {
      slider:{
        display:"none",
      },
      main:{
        display:"block"
      },
      empty:{
        display:"none"
      }
    };
  }

  public emptyDis(){
    return {
      slider:{
        display:"none",
      },
      main:{
        display:"none"
      },
      empty:{
        display:"block"
      }
    };
  }

  public sliderDis(){
    return {
      slider:{
        display:"block",
      },
      main:{
        display:"none"
      },
      empty:{
        display:"none"
      }
    };
  }



  //Storage Custom
  public sGet(name, callback, err="Terjadi Kesalahan"){
    let dt:any= {
      stat:false,
      data:null,
      dis: this.sliderDis()
    };
    callback(dt);
    this.getS(name).then(data=>{
      let a:any = data;
      if(a == null){
        dt.stat = false;
        dt.data = [];
        dt.dis = this.emptyDis();
      }else{

        let d = a.filter(x=> x._id === this._id);
        if(d.length == 0){
          dt.stat = false;
          dt.data = [];
          dt.dis = this.emptyDis();
        } else{
          dt.stat = true;
          dt.data = d;
          dt.dis = this.activeDis();
        }
      }
      callback(dt);
    }, ()=>{
      dt.stat = false;
      dt.dis = this.emptyDis();
      callback(dt);
      this.alert(err);
    })
  }

  // Http Custom
  public hhGet(url, callback, err="Terjadi Kesalahan", met=true){
    if(met == true){
      let _ur = url.split('?')[0];
      let dt:any= {
        stat:false,
        data:[],
        dis: this.sliderDis()
      };
      callback(dt);
      
      setTimeout(()=>{
        this.http.get(this._url+url, 
          { headers: new HttpHeaders({
            'Content-Type': 'application/json',
            'Authorization': 'Bearer '+this.token
          })
        }).subscribe(data=>{
          let a:any = data;

            if(a != false && a != null && a.length != 0){
              dt.stat = true;
              dt.data = data;
              dt.dis = this.activeDis();
            } else{
              dt.dis = this.emptyDis();
            }
            callback(dt);
        }, (a)=>{
          dt.dis = this.emptyDis();
          callback(dt);
          this.alert(err);
        })
      }, 500)
    } else{
      this.http.get(this._url+url, 
        { headers: new HttpHeaders({
          'Authorization': 'Bearer '+this.token,
          'Content-Type': 'application/json',
        })
      }).subscribe(data=>{
          callback(data);
      })
    }
  }

  public hhPost(url, data, callback, met=true){
    if(met == true){
      this.loading(data.load).then(()=>{
        this.http.post(this._url+url, data.data, { headers: new HttpHeaders({
          'Authorization': 'Bearer '+this.token
        })}).subscribe((dt)=>{
          this.disLoading();
          callback(true);
        }, (dt)=>{
          this.disLoading();
          this.alert(data.err);
          callback(false);
        })
      })
    }
    else{
      this.http.post(this._url+url, data.data, { headers: new HttpHeaders({
        'Authorization': 'Bearer '+this.token,
      })}).subscribe((dt)=>{
        callback(dt)
      })
    }
  }

  public hhPut(url, data:any={}, callback){
    this.loading(data.load).then(()=>{
      this.http.put(this._url+url, data.data, { headers: new HttpHeaders({
        'Authorization': 'Bearer '+this.token
      })}).subscribe((d)=>{
        callback(true);
        this.disLoading();
      }, (d)=>{
        this.alert(data.err);
        callback(false);
        this.disLoading();
      })
    })
  }

  public hhDelete(url, data:any={}, callback){
    let o = url.split('?');
    this.confirm({
      title: data.title,
      message: data.message,
      mode: "delete"
    }, ()=>{
      this.loading(data.load).then(()=>{
        this.http.get(this._url+o[0]+"/d?"+o[1], { headers: new HttpHeaders({
          'Authorization': 'Bearer '+this.token,
          'Content-Type': 'application/json',
        })}).subscribe(()=>{
          callback(true);
          this.disLoading();
        }, (d)=>{
          callback(false);
          this.alert(data.err);
          this.disLoading();
        })
      })
    })
  }





  //Data Manipulate
  public cData(data, nullText){
    let d = data;
    if(data == "" || data == null){
      d = nullText;
    }
    return d;
  }

  
  _shuf( arr ){
    const newArr = arr.slice()
    for (let i = newArr.length - 1; i > 0; i--) {
        const rand = Math.floor(Math.random() * (i + 1));
        [newArr[i], newArr[rand]] = [newArr[rand], newArr[i]];
    }
    return newArr;
  }







  //times

  public timestampDate(date = "2021-02-01 00:00:00"){
    var dt = date.split(' ')[0];
    return dt;
  }

  public day(day="1"){
    var retDay = "";
    switch(day){
      case "1":
        retDay = "Senin"
      break;
      case "2":
        retDay = "Selasa"
      break;
      case "3":
        retDay = "Rabu"
      break;
      case "4":
        retDay = "Kamis"
      break;
      case "5":
        retDay = "Jumat"
      break;
      case "6":
        retDay = "Sabtu"
      break;
      case "7":
        retDay = "Minggu"
      case "0":
        retDay = "Minggu"
      break;
        default: retDay="";
    }

    return retDay;
  }

  public getDay(){
    var d = new Date();
    return d.getDay();
  }

  public tsTime(ts, met = 0){
    var a = ts.split(' ')[1].split(':');
    return a[0]+":"+a[1];
  }

  public tSplit(ts){
    var time = ts.split('T')[1].split('.')[0];
    var sDate = ts.split('T')[0].split('-');
    var month = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'];

    return sDate[2]+" "+month[parseInt(sDate[1])-1]+" "+sDate[0]+", "+time;
  }

  public lSplit(ts){
    var time = ts.split(',')[1].split(' ')[0];
    var sDate = ts.split(',')[0].split('/');
    var month = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'];

    return sDate[0]+" "+month[parseInt(sDate[1])-1]+" "+sDate[2]+", "+time;
  }

  public dSplit(dt=""){
    var a="";
    if(dt != ""){
      var sDate = dt.split('-');
      var month = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des'];

      a = sDate[2]+" "+month[parseInt(sDate[1])-1]+" "+sDate[0];
    }

    return a;
  }

  public timestampGetMinutes(){
    var dt = new Date().toISOString().split('T')[1].split(':');

    return dt[1];
  }

  public getDate(){
    var d = new Date();
    var m = d.getMonth()+1;
    return d.getFullYear()+"-"+m+"-"+d.getDate();
  }

  public jParse(s){
    return JSON.parse(s);
  }
  
  public rupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
   
    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      var separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
   
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
  }

}
