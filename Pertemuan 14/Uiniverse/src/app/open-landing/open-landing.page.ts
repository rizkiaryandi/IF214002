import { Component } from '@angular/core';
import { GnService } from "../services/gn.service";

@Component({
  selector: 'app-open-landing',
  templateUrl: './open-landing.page.html',
  styleUrls: ['./open-landing.page.scss'],
})
export class OpenLandingPage {

  constructor(private gn:GnService) { }

  ionViewDidEnter() {
    
    setTimeout(()=>{
      this.gn.pagesNavigate("home");
    }, 500);
  }

}
