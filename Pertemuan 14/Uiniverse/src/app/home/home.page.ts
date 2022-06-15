import { Component, ViewChild, OnInit } from '@angular/core';
import { GnService } from '../services/gn.service';


import { ModalController, MenuController, PopoverController, IonSlides, ActionSheetController } from '@ionic/angular';
import { LocalNotifications } from '@ionic-native/local-notifications/ngx';
import { FeaturesComponent } from './modal/features/features.component';
import { MainComponent } from './modal/main/main.component';
import { ScheduleComponent } from './modal/schedule/schedule.component';
import { ShowScheduleComponent } from './modal/show-schedule/show-schedule.component';
import { ActionService } from '../services/auth/action.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {
  @ViewChild('scheduleSlides', {static:true}) scheduleSlides:IonSlides;
  @ViewChild('portalSlides', {static:true}) portalSlides:IonSlides;

  profile:any={
    img:null
  };
  prfl=false;
  schedule:any=[];
  cSchedule:any=[];
  marketplace:any=[];
  service:any=[];
  dis:any={
    marketplace:{},
    service:{},
    update:{},
    schedule:{}
  };

  portalSlideTitle = "Marketplace";

  homeStyle = {
    'profile':{
      opacity:1
    },
    'header':{
      display:'none'
    },

    'bodyContainer':{
      'padding-top': '153px'
    },

    'btnMenu':[
      {display:"block"},{display:"none"}
    ],
    'menu':[
      {display:"block"},{display:"none"}
    ]
  }

  scheduleSlidesOptions={
    initialSlide: 0,
    slidesPerView : 1.3,
  };
  constructor(
    private actionService:ActionService,
    private modalController: ModalController,
    private popoverController:PopoverController,
    private menu: MenuController,
    private gn:GnService,
    private actionSheetController:ActionSheetController,
    private localNotifications: LocalNotifications
  ) {
    // console.log(new Date())
  }

  ngOnInit(met = false){
    this.menu.enable(false, 'menu');
    this.slide(0, met);
    this.scheduleEv(true);

    this.gn.hhGet("user_profile?id=ynd_profile", (data)=>{
      this.dis.profile = data.dis;
      if(data.stat ==  true){
        this.profile = data.data[0];
        this.profile.name = this.gn.cData(this.profile.name, "Profil Pengguna");
        if(this.profile.name == "Profil Pengguna") this.prfl = true;
        this.profile.img = this.gn.cData(this.profile.img, null);
        this.profile.name = this.profile.name.split(' ')[0];
        if(this.profile.name.length > 10) this.profile.name = this.profile.name.slice(0, 9)+"..";
      }
    })
    this.menuEv(false)
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ngOnInit(true);
      this.ionViewDidEnter();
      event.target.complete();
    }, 500);
  }

  ekn(){
    window.open("https://eknows.uinsgd.ac.id/calendar/view.php?view=month", '_blank');
  }

  refr(){
    this.ngOnInit(true);
    this.ionViewDidEnter();
  }

  ionViewDidEnter(){
    this.menu.enable(false, 'menu');
    this.scheduleEv(false);
    this.scheduleSlides.update();
    this.portalSlides.update();

    this.gn.getS('loga').then(dat=>{
      if(dat == true){
        this.gn.defAddS('loga',false)
        this.ngOnInit();
      }
    })
  }

  scrollY(ev){
    this.homeStyle.profile.opacity = 1-(ev.srcElement.scrollTop/120);
  }

  menuEv(e){
    if(e == true){
      this.homeStyle.bodyContainer['padding-top'] = "calc(100vh - 100px)";
      setTimeout(()=>{
        this.homeStyle.menu = [
          {display:"none"},{display:"block"}
        ];
      }, 350);


      this.homeStyle.btnMenu = [
        {display:"none"},{display:"block"}
      ];
    }
    else{
      this.homeStyle.bodyContainer['padding-top'] = "153px";
      setTimeout(()=>{
        this.homeStyle.menu = [
          {display:"block"},{display:"none"}
        ];
      }, 350);


      this.homeStyle.btnMenu = [
        {display:"block"},{display:"none"}
      ];
    }
  }

  openMenu() {
    this.menu.enable(true, 'menu');
    this.menu.open('menu');
  }

  closeMenu(){
    this.menu.enable(false, 'menu');
  }

  scheduleEv(val){
    this.gn.sGet("schedule", (data)=>{

      if(val) this.dis.schedule = data.dis;
      if(data.stat){
        this.schedule = this.setSchedule(data.data);
        this.cSchedule = this.schedule;

        console.log(this.cSchedule)

        for(var h = 0; h<this.cSchedule.length; h++){
          this.localNotifications.schedule({
            id: this.cSchedule[h].id,
            text: "( "+this.cSchedule[h].type+" ) "+this.cSchedule[h].name,
            trigger: { at: new Date(this.cSchedule[h].time) },
            led: '#FF0000',
            sound: 'file://sound.mp3',
          });
        }

      }
    })
  }

  setSchedule(arr){

    let task = arr.filter(x=> x.type === "task");
    let event = arr.filter(x=> x.type === "event");

    let day =  new Date().getDay();
    let startTime = Date.parse(this.gn.getDate());

    if(day == 0) day = 7;

    let a = 0;
    let c = 0;
    let spec = 0;
    let sec = 0;
    let mit = 0;
    let college = arr.filter(x=> x.type === "college");


    for(let i = 0; i<college.length; i++){
      c = college[i].deadline_start.split(' ')[1].split(':');
      mit = parseInt(c[0]);
      sec = parseInt(c[1]);
      spec = parseInt(college[i].specific);

      if(spec < day){
        a = spec + 7 - day;
        college[i].description =  "(Pekan Depan) "+college[i].description;
      } else if(spec >= day){
        a = spec - day;
      }
      college[i].time = startTime + (a*24*60*60*1000) + (mit*60*60 + sec*60)*1000;
    }


    let newArr = [].concat(college, task, event);
    newArr.sort(this.dynamicSort('time'));
    return newArr.filter(x=>x.time > Date.now());



  }

  dynamicSort(property) {
    var sortOrder = 1;
    if(property[0] === "-") {
        sortOrder = -1;
        property = property.substr(1);
    }
    return function (a,b) {
        var result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
        return result * sortOrder;
    }
  }

  mp(met = false){
    if(this.marketplace.length == 0 || met == true){
      this.gn.hhGet("marketplace", (data)=>{
        this.dis.marketplace = data.dis;
        if(data.stat) this.marketplace = this.gn._shuf(data.data);
      })
    }
  }

  sv(met = false){
    if(this.service.length == 0 || met == true){
      this.gn.hhGet("services", (data)=>{
        this.dis.service = data.dis;
        if(data.stat) this.service = data.data;
      })
    }
  }

  slide(slide=0, met = false){
    this.gn.sliderDis();
    this.portalSlides.slideTo(slide).then(()=>{
      if(slide == 0) this.mp(met);
      else if(slide == 1) this.sv(met);
    });
  }

  mainSearch(event) {
    event.target.blur();
    this.gn.pagesNavigate('search/0');
  }

  waSend(tel, name){
    window.open("https://wa.me/"+tel+"?text=Jasa Uiniverse: "+name+"%0a%0aHalo, Saya dari Uiniverse. Saya bersedia mengambil jasa "+name+" yang anda tawarkan", "_self");
  }

  logout(){

    this.profile={
      img:null
    };
    this.prfl=false;

    this.actionService.logout();
    this.gn.pagesNavigate('login');
  }

  async mainPopover(ev: any, id) {
    const popover = await this.popoverController.create({
      component: MainComponent,
      componentProps: {
        id:id
      },
      event: ev,
      translucent: true
    });
    return await popover.present();
  }

  async schedulePopover(ev: any) {
    const popover = await this.popoverController.create({
      component: ScheduleComponent,
      event: ev,
      translucent: true
    });
    return await popover.present();
  }

  async scheduleModal(arr) {
    const modal = await this.modalController.create({
      component: ShowScheduleComponent,
      componentProps:{
        sc:arr
      },
      swipeToClose: true,
      mode:"ios",
      cssClass:'modal-center-1',
      backdropDismiss: true
    });
    return await modal.present();
  }

  async featuresModal(sl) {
    const modal = await this.modalController.create({
      component: FeaturesComponent,
      componentProps:{
        initSlide:sl
      },
      swipeToClose: true,
      mode:"ios",
      cssClass:'modal-250px',
      backdropDismiss: true
    });
    return await modal.present();
  }

  async search(event) {
    event.target.blur();
    this.gn.pagesNavigate('main-search/0');
  }

  async scheduleFilter() {
    const actionSheet = await this.actionSheetController.create({
      mode:"ios",
      buttons: [{
        text: 'Urutkan Jadwal Terdekat',
        handler: () => {
          this.schedule = this.cSchedule;;
          this.schedule.sort(this.dynamicSort('time'));
        }
      },
      {
        text: 'Mata Kuliah Saja',
        handler: () => {
          this.schedule = this.cSchedule.filter(x=>x.type === "college");
        }
      },
      {
        text: 'Tugas Saja',
        handler: () => {
          this.schedule = this.cSchedule.filter(x=>x.type === "task");
        }
      },
      {
        text: 'Acara Saja',
        handler: () => {
          this.schedule = this.cSchedule.filter(x=>x.type === "event");
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
