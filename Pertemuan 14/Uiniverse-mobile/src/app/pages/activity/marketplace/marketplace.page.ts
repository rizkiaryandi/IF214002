import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';

@Component({
  selector: 'app-marketplace',
  templateUrl: './marketplace.page.html',
  styleUrls: ['./marketplace.page.scss'],
})
export class MarketplacePage implements OnInit {
  marketplace:any=[];

  dis ={
    marketplace:{}
  };
  constructor(private gn:GnService) { }

  ngOnInit(met = false) {
    if(this.marketplace.length == 0 || met == true){
      this.gn.hhGet("marketplace", data=>{
        this.dis.marketplace = data.dis;
        if(data.stat == true){
          this.marketplace = this.gn._shuf(data.data);
        }
      })
    }
  }

  sort(ev){
    if(ev == "termurah") this.marketplace.sort(this.dynamicSort("harga"));
    if(ev == "terbaru") this.marketplace.sort(this.dynamicSort("created_at"));
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
      this.ngOnInit(true);
      event.target.complete();
    }, 100);
  }

  refresh(){
    this.ngOnInit();
  }

  async mainSearch(event) {
    event.target.blur();
    this.pagesNavigate('search/1');
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

}
