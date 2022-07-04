import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { PopoverController } from '@ionic/angular';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.scss'],
})
export class MainComponent implements OnInit {

  constructor(private gn:GnService, private popoverController:PopoverController) { }

  ngOnInit() {}
  id = "ynd_profile";
  pagesNavigate(url){
    this.gn.pagesNavigate(url).then(()=>{
      this.popoverController.dismiss();
    });
  }

}
