import { NgModule }              from '@angular/core';
import { Routes, RouterModule }  from '@angular/router';

import { AuthGuard }             from './services/auth.guard';
import { AppComponent }          from './app.component';

import { LoginComponent }        from './core/login/login.component';
import { OperationComponent }    from './core/operation/operation.component';
import { HistoryComponent }      from './core/history/history.component';
import { InviteComponent }       from './core/invite/invite.component';
import { ProfileComponent }      from './core/profile/profile.component';

const routes: Routes = [
  { path: '', redirectTo: 'operation', pathMatch: 'full' },
  { path: 'login', component: LoginComponent },
  { path: 'operation', component: OperationComponent, canActivate: [ AuthGuard ] },
  { path: 'history', component: HistoryComponent, canActivate: [ AuthGuard ] },
  { path: 'invite', component: InviteComponent, canActivate: [ AuthGuard ] },
  { path: 'profile', component: ProfileComponent, canActivate: [ AuthGuard ] },
  { path: '**', redirectTo: 'operation', canActivate: [ AuthGuard ] }
];

@NgModule({
    imports: [ RouterModule.forRoot(routes) ],
    exports: [ RouterModule ]
})
export class AppRoutingModule { }
