import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';
import { GuardService } from './services/auth/guard.service';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule),
    canActivate: [GuardService]
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'college',
    loadChildren: () => import('./pages/college/college.module').then( m => m.CollegePageModule),
    canActivate: [GuardService]
  },
  {
    path: 'marketplace',
    loadChildren: () => import('./pages/activity/marketplace/marketplace.module').then( m => m.MarketplacePageModule),
    canActivate: [GuardService]
  },
  {
    path: 'service',
    loadChildren: () => import('./pages/activity/service/service.module').then( m => m.ServicePageModule),
    canActivate: [GuardService]
  },
  {
    path: 'forum',
    loadChildren: () => import('./pages/activity/forum/forum.module').then( m => m.ForumPageModule),
    canActivate: [GuardService]
  },
  {
    path: 'user',
    loadChildren: () => import('./pages/user/user.module').then( m => m.UserPageModule),
    canActivate: [GuardService]
  },
  {
    path: 'user/:id',
    loadChildren: () => import('./pages/user/user.module').then( m => m.UserPageModule),
    canActivate: [GuardService]
  },
  {
    path: 'schedule',
    loadChildren: () => import('./pages/schedule/schedule.module').then( m => m.SchedulePageModule),
    canActivate: [GuardService]
  },
  {
    path: 'schedule/:id',
    loadChildren: () => import('./pages/schedule/schedule.module').then( m => m.SchedulePageModule),
    canActivate: [GuardService]
  },
  {
    path: 'note',
    loadChildren: () => import('./pages/tool/note/note.module').then( m => m.NotePageModule),
    canActivate: [GuardService]
  },
  {
    path: 'prayer',
    loadChildren: () => import('./pages/tool/prayer/prayer.module').then( m => m.PrayerPageModule),
    canActivate: [GuardService]
  },
  {
    path: 'covid19',
    loadChildren: () => import('./pages/tool/covid19/covid19.module').then( m => m.Covid19PageModule),
    canActivate: [GuardService]
  },
  {
    path: 'search',
    loadChildren: () => import('./pages/search/search.module').then( m => m.SearchPageModule),
    canActivate: [GuardService]
  },
  {
    path: 'search/:id',
    loadChildren: () => import('./pages/search/search.module').then( m => m.SearchPageModule),
    canActivate: [GuardService]
  },
  {
    path: 'login',
    loadChildren: () => import('./pages/auth/login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'register',
    loadChildren: () => import('./pages/auth/register/register.module').then( m => m.RegisterPageModule)
  },
  {
    path: 'open-landing',
    loadChildren: () => import('./open-landing/open-landing.module').then( m => m.OpenLandingPageModule)
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
