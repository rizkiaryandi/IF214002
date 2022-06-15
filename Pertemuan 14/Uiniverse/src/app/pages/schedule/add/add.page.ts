import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-add',
  templateUrl: './add.page.html',
  styleUrls: ['./add.page.scss'],
})
export class AddPage implements OnInit {

  id = this.activatedRoute.snapshot.paramMap.get('id');
  judul;
  
  customDayShortNames = ['s\u00f8n', 'man', 'tir', 'ons', 'tor', 'fre', 'l\u00f8r'];

  matkul:any= {
    "id":0,
    "type":"college",
    "user_id":1,
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
    "user_id":1,
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
    "user_id":1,
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
    this.changedForm(this.id);
  }

  addMatkul() {
    this.matkul.id = new Date().getTime();
    this.matkul.deadline_start = "2021-01-01 "+this.matkul.deadline_start;
    this.matkul.deadline_end = "2021-01-01 "+this.matkul.deadline_end;
    this.matkul.time = 0;
    this.gn.addS("schedule", this.matkul);
    this.gn.pagesNavigate('schedule/0');
  }

  addTugas() {
    this.tugas.id = new Date().getTime();
    
    let d = this.tugas.deadline_start.split('T');
    this.tugas.time = Date.parse(d[0]+" "+d[1]);

    this.tugas.deadline_start = this.gn.day(new Date(this.tugas.time).getDay().toString())+", "+d[0]+" "+d[1];
    this.gn.addS("schedule", this.tugas);
    this.gn.pagesNavigate('schedule/1');
  }

  addAcara() {
    this.acara.id = new Date().getTime();
    
    let d = this.acara.deadline_start.split('T');
    this.acara.time = Date.parse(d[0]+" "+d[1]);

    this.acara.deadline_start = this.gn.day(new Date(this.acara.time).getDay().toString())+", "+d[0]+" "+d[1];
    this.gn.addS("schedule", this.acara);
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
