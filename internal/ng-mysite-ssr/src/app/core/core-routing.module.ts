import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CoreComponent } from './core.component';
import { AuthGuard } from '../service/auth.guard';

const routes: Routes = [
    { path: '', component: CoreComponent, children: [
        { path: '', redirectTo: 'portfolio', pathMatch: 'full' },
        { path: 'portfolio', canActivateChild: [AuthGuard], loadChildren: './portfolio/portfolio.module#PortfolioModule', }
    ]}
];

@NgModule({
    imports: [ RouterModule.forChild(routes) ],
    exports: [ RouterModule ]
})
export class CoreRoutingModule { }
