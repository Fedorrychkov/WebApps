import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AuthGuard } from './service/auth.guard';

const routes: Routes = [
    { path: '', children: [
        { path: '', redirectTo: 'app', pathMatch: 'full' },
        { path: 'app', loadChildren: './core/core.module#CoreModule', canActivate: [AuthGuard] },
        { path: '**', redirectTo: '#', canActivate: [AuthGuard] }
    ]}
];

@NgModule({
    imports: [ RouterModule.forRoot(routes) ],
    exports: [ RouterModule ]
})
export class AppRoutingModule { }
