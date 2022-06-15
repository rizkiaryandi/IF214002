import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';

@Component({
  selector: 'app-covid19',
  templateUrl: './covid19.page.html',
  styleUrls: ['./covid19.page.scss'],
})
export class Covid19Page implements OnInit {

  constructor(public gn:GnService) { }
  rev = {
    display:"block"
  };
  ngOnInit() {
    this.rev.display = "block";
  }
  
  loadEv(){
    this.rev.display = "none";
  }
    

}
