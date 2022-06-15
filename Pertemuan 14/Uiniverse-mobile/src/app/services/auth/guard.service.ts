import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
import { ActionService } from './action.service';

@Injectable({
  providedIn: 'root'
})
export class GuardService {

  constructor(
    public actionService: ActionService) {}

  canActivate(): boolean {
    return this.actionService.isAuthenticated();
  }
}
