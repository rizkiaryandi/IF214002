import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { PopoverController } from '@ionic/angular';

@Component({
  selector: 'app-schedule',
  templateUrl: './schedule.component.html',
  styleUrls: ['./schedule.component.scss'],
})
export class ScheduleComponent implements OnInit {
 
  constructor(public gn:GnService, private popoverController:PopoverController) { }

  ngOnInit() {}

  pagesNavigate(url){
    this.gn.pagesNavigate(url).then(()=>{
      this.popoverController.dismiss();
    });
  }
}
