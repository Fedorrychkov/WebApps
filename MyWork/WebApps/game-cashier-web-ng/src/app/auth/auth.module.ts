import { NgModule }             from '@angular/core';
import { CommonModule }         from '@angular/common';
import { ReactiveFormsModule }  from '@angular/forms';
//import { TranslateModule }      from '@ngx-translate/core';

import { AuthRoutingModule }    from './auth-routing.module';
import { LoginComponent }       from './login/login.component';
import { AuthService }          from '../services/auth.service';

@NgModule({
    imports: [
        CommonModule,
        AuthRoutingModule,
        ReactiveFormsModule
        //TranslateModule
    ],
    declarations: [
        LoginComponent
    ],
    providers: [
        AuthService,
    ]
})
export class AuthModule { }
