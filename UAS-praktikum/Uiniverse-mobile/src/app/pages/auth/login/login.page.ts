import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { ActionService } from '../../../services/auth/action.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  data = {
    username:"",
    password:""
  };
  ds = "true";
  spin = {
    display:"none"
  }
  dt;
  constructor(public gn:GnService, public actionService:ActionService) { }

  ngOnInit() {
    this.data.username = ""
    this.data.password = ""
  }

  logForm(){
    this.actionService.login(this.data);

  }

  inputTxt(){
    if(this.data.username.length >= 3 && this.data.password.length >= 8) this.ds = "false";
    else this.ds = "true";
  }

}
