import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { OpenLandingPage } from './open-landing.page';

const routes: Routes = [
  {
    path: '',
    component: OpenLandingPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class OpenLandingPageRoutingModule {}
