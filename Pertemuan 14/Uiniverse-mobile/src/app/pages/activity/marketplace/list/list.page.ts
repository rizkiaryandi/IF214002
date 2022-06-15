import { Component } from '@angular/core';
import { GnService } from '../../../../services/gn.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.page.html',
  styleUrls: ['./list.page.scss'],
})
export class ListPage {

  item:any;
  dis ={
    marketplace:{}
  } ;
  constructor(public gn:GnService) { }

  ionViewDidEnter() {
    this.gn.hhGet("marketplace?id=ynd_items", data=>{
      this.dis.marketplace = data.dis;
      if(data.stat) this.item = data.data;
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

  delete(id){
    this.gn.hhDelete("marketplace?id="+id,{
      title:"Menghapus Item",
      message:"Yakin menghapus item?",
      load:"Menghapus item",
      err:"Gagal menghapus Item"
    }, ()=>{
      this.ionViewDidEnter();
    });
  }

}
