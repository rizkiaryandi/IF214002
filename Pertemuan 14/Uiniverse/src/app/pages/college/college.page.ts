import { Component, OnInit } from '@angular/core';
import { GnService } from '../../services/gn.service';
import { HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, map } from 'rxjs/operators';

@Component({
  selector: 'app-college',
  templateUrl: './college.page.html',
  styleUrls: ['./college.page.scss'],
})
export class CollegePage implements OnInit {

  constructor(private gn:GnService) { }

  ngOnInit() {
  }

  openUrl(url){
    window.open(url, '_blank');
  }

}
