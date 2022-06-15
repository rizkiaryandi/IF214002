import { Component, OnInit, ViewChild} from '@angular/core';
import { IonSearchbar } from '@ionic/angular';
import { ActivatedRoute } from '@angular/router';
import { GnService } from '../../services/gn.service';
import { HttpHeaders } from '@angular/common/http';

@Component({
  selector: 'app-search',
  templateUrl: './search.page.html',
  styleUrls: ['./search.page.scss'],
})
export class SearchPage implements OnInit {
  @ViewChild('ic', {static:true}) ic:IonSearchbar;
  placeholder="";
  metode="0";
  users:any;
  items:any;

  moh = this.metode;

  st1 = ['block', 'none', 'none'];
  st2 = ['none', 'block', 'none'];
  st3 = ['none', 'none', 'block'];
  st = this.st1;


  
  ast1 = ['block', 'none', 'none'];
  ast2 = ['none', 'block', 'none'];
  ast3 = ['none', 'none', 'block'];
  ast = this.st1;
  constructor(private activatedRoute: ActivatedRoute, public gn:GnService) {}

  ngOnInit() {
  }

  ionViewDidEnter(){
    this.ic.setFocus();
    this.metode = this.activatedRoute.snapshot.paramMap.get('id');
    this.searchMethod(this.metode);
  }

  checkUser(val){
    if(this.moh == '0'){
      if(val == ''){
        this.st = this.st1;
      }else{
        this.st = this.st2;
        setTimeout(()=>{
        
          this.gn.httpGet(this.gn._url+"user_profile/user?k="+val,{ headers: new HttpHeaders({
            'Content-Type': 'application/json',
            'Authorization': 'Bearer '+this.gn.token
            })
          }).subscribe(data=>{
            if(!data){
              this.st = this.st1;
            }
            else{
              this.st = this.st3;
              this.users = data;
            }
          })
        }, 1000)
      }
      
    } else if(this.moh == '1'){
      if(val == ''){
        this.ast = this.ast1;
      } else{
        this.ast = this.st2;
        setTimeout(()=>{
          this.gn.httpGet(this.gn._url+"user_profile/marketplace?k="+val,{ headers: new HttpHeaders({
            'Content-Type': 'application/json',
            'Authorization': 'Bearer '+this.gn.token
            })
          }).subscribe(data=>{
            if(!data){
              this.ast = this.ast1;
            }
            else{
              this.ast = this.ast3;
              this.items = data;
            }
          })
        }, 1000)
      }
    }
  }
  
  segmentChanged(ev){
    this.searchMethod(ev.target.value)
  }

  searchMethod(val){
    this.metode = val;
    switch(this.metode){
      case "0": this.placeholder = "Cari Seseorang"; this.moh = '0'; break;
      case "1": this.placeholder = "Cari Sesuatu"; this.moh = '1'; break;
      default: this.placeholder = "Cari Pengguna";
    }
  }

}
