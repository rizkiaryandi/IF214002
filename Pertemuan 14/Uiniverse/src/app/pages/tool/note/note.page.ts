import { Component } from '@angular/core';
import { GnService } from '../../../services/gn.service';

@Component({
  selector: 'app-note',
  templateUrl: './note.page.html',
  styleUrls: ['./note.page.scss'],
})
export class NotePage {

  constructor(private gn:GnService) { }
  data:any;
  dis:any={};

  ionViewDidEnter(){
    this.loadData();
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ionViewDidEnter();
      event.target.complete();
    }, 100);
  }

  deleteItem(id){
    this.gn.confirm({
      title:"Menghapus Catatan",
      message:"Yakin menghapus catatan?",
      mode:"delete"
    }, ()=>{
      this.gn.deleteS("notes",id).then(()=>{
        this.loadData();
      });
    })
  }

  loadData(){
    this.gn.sGet("notes", data=>{
      this.dis = data.dis;
      if(data.stat) this.data = data.data;
    })
  }

}
