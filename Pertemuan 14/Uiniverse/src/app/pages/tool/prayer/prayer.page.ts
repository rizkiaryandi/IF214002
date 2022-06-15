import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { Geolocation } from '@ionic-native/geolocation/ngx';

@Component({
  selector: 'app-prayer',
  templateUrl: './prayer.page.html',
  styleUrls: ['./prayer.page.scss'],
})
export class PrayerPage implements OnInit {

  data;
  times={};
  date={};
  going={};
  dis:any={};
  constructor(private gn:GnService, private geolocation: Geolocation) { }

  ngOnInit() {
  }

  ionViewDidEnter(){
    this.gn.sliderDis();
    this.loadData();
  }

  loadData(){
    var date = new Date();
    var now = parseFloat(date.getHours()+"."+date.getMinutes());
    var el = 0;
    this.dis = this.gn.sliderDis();
    this.geolocation.getCurrentPosition({
      enableHighAccuracy: true
    }).then((resp) => {
      if(resp.coords.altitude != null) el =resp.coords.altitude;
      this.gn.httpGet('https://api.pray.zone/v2/times/day.json?longitude='+resp.coords.longitude+'&latitude='+resp.coords.latitude+'&elevation=710&date='+this.gn.getDate()).subscribe(data=>{
        this.dis = this.gn.activeDis();
        this.data = data;  
        this.times = this.data.results.datetime[0].times;
        this.date = this.data.results.datetime[0].date;
        var ad = this.data.results.datetime[0].times;
        var fajr = parseFloat(ad.Fajr.split(':')[0]+"."+ad.Fajr.split(':')[1]);
        var dhuhr = parseFloat(ad.Dhuhr.split(':')[0]+"."+ad.Dhuhr.split(':')[1]);
        var asr = parseFloat(ad.Asr.split(':')[0]+"."+ad.Asr.split(':')[1]);
        var maghrib = parseFloat(ad.Maghrib.split(':')[0]+"."+ad.Sunset.split(':')[1]);
        var isha = parseFloat(ad.Isha.split(':')[0]+"."+ad.Isha.split(':')[1]);
        this.gn.alert("Waktu saat ini, "+now)
        if (now >= fajr && now < dhuhr){
          this.going = {
            "pray":"Dzuhur",
            "time": ad.Dhuhr
          }
        }
        else if (now >= dhuhr && now < asr){
          this.going = {
            "pray":"Ashar",
            "time": ad.Asr
          }
        }
        else if (now >= asr && now < maghrib){
          this.going = {
            "pray":"Maghrib",
            "time": ad.Sunset
          }
        }
        else if (now >= maghrib && now < isha){
          this.going = {
            "pray":"Isya",
            "time": ad.Isha
          }
        }
        else{
          this.going = {
            "pray":"Subuh",
            "time": ad.Fajr
          }
        }

        this.gn.activeDis();
      })
     }).catch((error) => {
       this.ngOnInit();
     });
  }

}
