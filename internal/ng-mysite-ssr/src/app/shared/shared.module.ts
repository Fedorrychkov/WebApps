import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { TranslateModule } from '@ngx-translate/core';

import { LandingHeaderComponent } from './landing-header/landing-header.component';
import { LandingWelcomeComponent } from './landing-welcome/landing-welcome.component';

// import { FormControlComponent } from './ui';

@NgModule({
    imports: [
        CommonModule,
        RouterModule,
        FormsModule,
        ReactiveFormsModule,
        TranslateModule
    ],
    exports: [
        LandingHeaderComponent,
        LandingWelcomeComponent
    ],
    providers: [
    ],
    declarations: [
        LandingHeaderComponent,
        LandingWelcomeComponent
    ]
})
export class SharedModule { }
