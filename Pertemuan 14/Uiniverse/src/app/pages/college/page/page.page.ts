import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { GnService } from '../../../services/gn.service';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';

@Component({
  selector: 'app-page',
  templateUrl: './page.page.html',
  styleUrls: ['./page.page.scss'],
})
export class PagePage implements OnInit {

  ur:SafeResourceUrl;
  constructor(public gn:GnService, private ac:ActivatedRoute, private sanitizer: DomSanitizer) { }
  rev = {
    display:"block"
  };
  ngOnInit() {
    this.ur =  this.sanitizer.bypassSecurityTrustResourceUrl("https://"+this.ac.snapshot.paramMap.get('url'));
    this.rev.display = "block";
  }
  
  loadEv(){
    this.rev.display = "none";
  }

}
