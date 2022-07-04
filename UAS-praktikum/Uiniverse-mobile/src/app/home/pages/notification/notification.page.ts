import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';

@Component({
  selector: 'app-notification',
  templateUrl: './notification.page.html',
  styleUrls: ['./notification.page.scss'],
})
export class NotificationPage implements OnInit {

  notif:any;
  constructor(public gn:GnService) { }

  ngOnInit() {
  }

}
