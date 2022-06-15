import { Component } from '@angular/core';
import { Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { ActionService } from './services/auth/action.service';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})
export class AppComponent {
  constructor(
    private platform: Platform,
    private splashScreen: SplashScreen,
    public actionService: ActionService
  ) {
    let a = window.location.pathname;
    this.platform.ready().then(() => {
      this.splashScreen.hide();
      this.actionService.getInfo(a);
    });
  }
}
