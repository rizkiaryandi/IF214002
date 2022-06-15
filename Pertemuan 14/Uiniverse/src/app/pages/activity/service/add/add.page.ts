import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../../services/gn.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-add',
  templateUrl: './add.page.html',
  styleUrls: ['./add.page.scss'],
})
export class AddPage implements OnInit {

  todo:any={};

  td:any={};
  mode="Tambah ke";
  itemId;
  constructor(public gn:GnService, private activatedRoute: ActivatedRoute) { }

  ngOnInit() {
    this.itemId = this.activatedRoute.snapshot.paramMap.get('id');
    if(this.itemId != null){
      this.mode = "Edit";

      this.gn.hhGet("services?id="+this.itemId, data=>{
        if(data.stat) this.todo = data.data[0];
      })
    }
  }

  ionViewDidEnter(){
    this.todo={}
  }

  logForm() {
    let d:any={};
    if(this.mode == "Tambah ke"){
      d.data = this.todo;
      d.load = "Menambah Pencarian Jasa";
      d.err = "Gagal menambah pencarian jasa";
      this.gn.hhPost("services", d, ()=>{
        if(d) this.pagesNavigate('service/list');
      })
    }
    else if(this.mode == "Edit"){
      d.data = this.todo;
      d.load = "Mengedit Pencarian Jasa";
      d.err = "Gagal mengedit pencarian jasa";
      this.gn.hhPost("services/d", d, ()=>{
        if(d) this.pagesNavigate('service/list');
      })
    }
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url);
  }

}
