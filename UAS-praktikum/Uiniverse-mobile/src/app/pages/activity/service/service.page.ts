import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';

@Component({
  selector: 'app-service',
  templateUrl: './service.page.html',
  styleUrls: ['./service.page.scss'],
})
export class ServicePage implements OnInit {
  jasa:any;
  dis ={
    jasa:{},
  } ;

  constructor(public gn:GnService) { }

  ngOnInit() {

    this.gn.hhGet("services", data=>{
      this.dis.jasa = data.dis

      if(data.stat == true){
        this.jasa = data.data;
      }
    })
  }
  
  doRefresh(event) {
    setTimeout(() => {
      this.ngOnInit();
      event.target.complete();
    }, 100);
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  sort(ev){
    if(ev == "termahal") this.jasa.sort(this.dynamicSort("payment"));
    if(ev == "terbaru") this.jasa.sort(this.dynamicSort("created_at"));
  }

  dynamicSort(property) {
    var sortOrder = 1;
    if(property[0] === "-") {
        sortOrder = -1;
        property = property.substr(1);
    }
    return function (a,b) {
        var result = (a[property] > b[property]) ? -1 : (a[property] < b[property]) ? 1 : 0;
        return result * sortOrder;
    }
  }

  waSend(tel, name){
    window.open("https://wa.me/"+tel+"?text=Jasa Uiniverse: "+name+"%0a%0aHalo, Saya dari Uiniverse. Saya bersedia mengambil jasa "+name+" yang anda tawarkan", "_self");
  }

  refresh(){
    this.ngOnInit();
  }

}
