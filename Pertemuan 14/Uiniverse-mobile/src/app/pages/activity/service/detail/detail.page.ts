import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { GnService } from '../../../../services/gn.service';

@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage implements OnInit {

  ji:any={};
  itemId = "";
  dis ={
    jasa:{},
  } ;


  constructor(private activatedRoute: ActivatedRoute, public gn:GnService) { }

  ngOnInit() {
    this.itemId = this.activatedRoute.snapshot.paramMap.get('id');
    this.gn.hhGet("services?id="+this.itemId, data=>{
      this.dis.jasa = data.dis;
      let dt:any= data.data;
      if(data.stat) this.ji = dt[0];
    });
  }

  doRefresh(event) {
    setTimeout(() => {
      event.target.complete();
    }, 2000);
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

  waSend(){
    if(this.ji.tel == "" || this.ji.tel == null) this.gn.alert("Tidak terdapat informasi nomor Whatsapp pengguna");
    else window.open("https://wa.me/"+this.ji.tel+"?text=Marketplace Uiniverse: "+this.ji.name+"%0a%0aHalo,%20Saya%20dari%20Uiniverse. Saya bersedia mengambil jasa "+this.ji.name, "_self");
  }
  
  callP(){
    if(this.ji.tel == "" || this.ji.tel == null) this.gn.alert("Tidak terdapat informasi nomor telepon pengguna");
    else window.open("tel:+"+this.ji.tel)
  }

}
