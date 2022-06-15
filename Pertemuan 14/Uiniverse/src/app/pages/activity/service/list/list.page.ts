import { Component } from '@angular/core';
import { GnService } from '../../../../services/gn.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.page.html',
  styleUrls: ['./list.page.scss'],
})
export class ListPage {

  jasa:any=[];
  dis ={
    jasa:{},
  } ;
  constructor(public gn:GnService) { }

  ionViewDidEnter() {
    this.gn.hhGet("services?id=ynd_items", data=>{
      this.dis.jasa = data.dis;
      if(data.stat) this.jasa = data.data;
    })
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ionViewDidEnter();
      event.target.complete();
    }, 100);
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  done(id=""){

  }

  delete(id=""){
    this.gn.hhDelete("services?id="+id, {
      title:"Menghapus Item",
      message:"Yakin menghapus item?",
      load:"Menghapus item",
      err:"Gagal menghapus Item"
    },()=>{
      this.ionViewDidEnter();
    });
    
  }

}
