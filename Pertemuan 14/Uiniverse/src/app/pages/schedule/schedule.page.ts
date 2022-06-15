import { Component, ViewChild} from '@angular/core';
import { IonSlides } from '@ionic/angular';
import { GnService } from '../../services/gn.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-schedule',
  templateUrl: './schedule.page.html',
  styleUrls: ['./schedule.page.scss'],
})
export class SchedulePage {
  @ViewChild('slides', {static:true}) slides:IonSlides;
  metode="0";
  slideOpts={
    slidesPerView: 1,
  }

  college:any;
  task:any;
  event:any;

  dis:any={
    college:{},
    task:{},
    event:{}
  };

  constructor(public gn:GnService, private activatedRoute: ActivatedRoute) { }

  ionViewWillEnter(){
    this.slides.update();
    this.metode = this.activatedRoute.snapshot.paramMap.get('id');
    this.searchMethod(this.metode);

  }
  ionViewDidEnter() {
    
    
    this.dis.college = this.gn.sliderDis();
    this.dis.task = this.gn.sliderDis();
    this.dis.event = this.gn.sliderDis();
    this.gn.getS("schedule").then(data=>{
      if(data != null){
        data = data.filter(x=> x._id === this.gn._id);
        this.college = data.filter(x=> x.type === "college");
        this.task = data.filter(x=> x.type === "task");
        this.event = data.filter(x=> x.type === "event");
        

        
        if(this.college.length > 0){
          this.dis.college = this.gn.activeDis();
          this.college.sort(this.dynamicSort('day'));
        }
        else this.dis.college = this.gn.emptyDis();
  
        
        if(this.task.length > 0){
          this.dis.task = this.gn.activeDis();
          this.college.sort(this.dynamicSort('time'));
        }
        else this.dis.task = this.gn.emptyDis()
  
        
        if(this.event.length > 0){
          this.dis.event = this.gn.activeDis();
          this.college.sort(this.dynamicSort('time'));
        }
        else this.dis.event = this.gn.emptyDis()
      } else{
        this.dis.college = this.gn.emptyDis();
        this.dis.task = this.gn.emptyDis();
        this.dis.event = this.gn.emptyDis();
      }
    })
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

  doRefresh(event) {
    setTimeout(() => {
      this.ionViewDidEnter();
      event.target.complete();
    }, 100);
  }

  searchMethod(val){
    this.metode = val;
    this.slides.slideTo(parseInt(val))
  }

  delete(id, type){
    let dat:any= {};
    if(type == 1){
      dat = {
        title:"Menghapus Mata Kuliah",
        message:"Yakin menghapus Mata Kuliah?",
        mode:"Hapus"
      };
    }else if(type == 2){
      dat = {
        title:"Menyelesaikan Tugas",
        message:"Tugas selesai?",
        mode:"Selesai"
      };
    }else if(type == 3){
      dat = {
        title:"Menyelesaikan Jadwal Acara",
        message:"Acara Selesai?",
        mode:"Selesai"
      };
    }
    this.gn.confirm(dat, ()=>{
      this.gn.deleteS("schedule", id).then(()=>{
        this.ionViewDidEnter();
      })
    })
  }

  
}
