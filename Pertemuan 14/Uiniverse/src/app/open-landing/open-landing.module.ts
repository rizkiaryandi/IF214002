import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { OpenLandingPageRoutingModule } from './open-landing-routing.module';

import { OpenLandingPage } from './open-landing.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    OpenLandingPageRoutingModule
  ],
  declarations: [OpenLandingPage]
})
export class OpenLandingPageModule {}
