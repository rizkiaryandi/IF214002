import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-edit',
  templateUrl: './edit.page.html',
  styleUrls: ['./edit.page.scss'],
})
export class EditPage implements OnInit {

  
  met = parseInt(this.activatedRoute.snapshot.paramMap.get('met'));
  id = this.activatedRoute.snapshot.paramMap.get('id');
  judul;
  
  customDayShortNames = ['s\u00f8n', 'man', 'tir', 'ons', 'tor', 'fre', 'l\u00f8r'];

  matkul:any= {
    "id":0,
    "type":"college",
    "name":"",
    "description":"",
    "specific":"",
    "deadline_start":"",
    "deadline_end":"",
    "status":"0",
    "url":""
  };

  tugas:any= {
    "id":0,
    "type":"task",
    "name":"",
    "description":"",
    "specific":"",
    "deadline_start":"",
    "deadline_end":"",
    "status":"0",
    "url":""
  };
  
  acara:any= {
    "id":0,
    "type":"event",
    "name":"",
    "description":"",
    "specific":"",
    "deadline_start":"",
    "deadline_end":"",
    "status":"0",
    "url":""
  };
  constructor(private gn:GnService, private activatedRoute: ActivatedRoute) { }

  ngOnInit() {
    
  }

  ionViewDidEnter(){
    this.changedForm(this.id);

    this.gn.getS('schedule').then(dt=>{
      let data = dt.find(x => x.id == this.met);

      console.log(data)
      if(data.type == 'college'){
        this.matkul = data;
        this.matkul.deadline_start = data.deadline_start.split(' ')[1];
        this.matkul.deadline_end = data.deadline_end.split(' ')[1];
      }else if(data.type == 'task'){
        this.tugas = data;
        this.tugas.deadline_start = this.conv(data.time);

      }else if(data.type == 'event'){
        this.acara = data;
        this.acara.deadline_start = this.conv(data.time);
      }
    })
  }

  conv(time){
    let y = new Date(time).toLocaleString().split(' ');
    let d = y[0].split('/');
    let t = y[1].split(':');

    if(parseInt(t[0]) < 10){
      t[0] = '0'+t[0];
    }
    if(parseInt(d[0]) < 10){
      d[0] = '0'+d[0];
    }

    return d[2].split(',')[0]+'-'+d[0]+'-'+d[1]+'T'+t[0]+':'+t[1];
  }

  addMatkul() {
    this.matkul.deadline_start = "2021-01-01 "+this.matkul.deadline_start;
    this.matkul.deadline_end = "2021-01-01 "+this.matkul.deadline_end;
    this.gn.editS("schedule", this.met, this.matkul);
    this.gn.pagesNavigate('schedule/0');
  }

  addTugas() {
    let d = this.tugas.deadline_start.split('T');
    this.tugas.time = Date.parse(d[0]+" "+d[1]);
    this.tugas.deadline_start = this.gn.day(new Date(this.tugas.time).getDay().toString())+", "+d[0]+" "+d[1];

    this.gn.editS("schedule", this.met, this.tugas);
    this.gn.pagesNavigate('schedule/1');
  }

  addAcara() {    
    let d = this.acara.deadline_start.split('T');
    this.acara.time = Date.parse(d[0]+" "+d[1]);

    this.acara.deadline_start = this.gn.day(new Date(this.acara.time).getDay().toString())+", "+d[0]+" "+d[1];
    this.gn.editS("schedule", this.met, this.acara);
    this.gn.pagesNavigate('schedule/2');
  }

  changedForm(val){
    this.id = val;
    switch(val){
      case '0': this.judul = "college"; break;
      case '1': this.judul = "task"; break;
      case '2': this.judul = "event"; break;
      default: this.judul = "college"; this.id = '0';
    }
  }

}
