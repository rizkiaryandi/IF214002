import { Component, OnInit, ViewChild } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { GnService } from '../../../../services/gn.service';

@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage implements OnInit {
  mi:any={
    images:"[]"
  };
  itemId:any;
  textWa="";
  dis ={
    marketplace:{}
  } ;
  constructor(private activatedRoute: ActivatedRoute, public gn:GnService) { }

  ngOnInit() {
    this.itemId = this.activatedRoute.snapshot.paramMap.get('id');
    this.textWa = "Apakah masih ada ?";
    this.gn.hhGet("marketplace?id="+this.itemId, data=>{
      this.dis.marketplace = data.dis;
      let d = data.data;
      if(data.stat){
        this.mi = d[0];
        // if(this.mi.images.length == 0) this.mi.images.push("/assets/img/no-image.png");
        this.mi.description = this.gn.cData(d[0].description, "Tidak ada deskripsi");
      }
    });
  }

  ionViewDidEnter(){
  }

  doRefresh(event) {
    setTimeout(() => {
      this.ngOnInit();
      event.target.complete();
    }, 100);
  }

  async mainSearch(event) {
    event.target.blur();
    this.pagesNavigate('search/1');
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  waSend(){
    if(this.mi.tel == "" || this.mi.tel == null) this.gn.alert("Pengguna tidak memiliki whatsapp");
    else window.open("https://wa.me/"+this.mi.tel+"?text=Marketplace Uiniverse: "+this.mi.title+"%0a%0a"+this.textWa, "_self");
  }

}
