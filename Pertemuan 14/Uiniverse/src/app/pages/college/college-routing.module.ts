import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { CollegePage } from './college.page';

const routes: Routes = [
  {
    path: '',
    component: CollegePage
  },
  {
    path: 'page',
    loadChildren: () => import('./page/page.module').then( m => m.PagePageModule)
  },
  {
    path: 'page/:url',
    loadChildren: () => import('./page/page.module').then( m => m.PagePageModule)
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CollegePageRoutingModule {}
