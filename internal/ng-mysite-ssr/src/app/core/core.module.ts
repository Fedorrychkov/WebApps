import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { TranslateService, TranslateModule } from '@ngx-translate/core';
import { ReactiveFormsModule } from '@angular/forms';
import { ChangeDetectorRef } from '@angular/core';

import { SharedModule } from '../shared/shared.module';

import { CoreRoutingModule } from './core-routing.module';
import { CoreComponent } from './core.component';
import { ConfigService } from '../service/config.service';
import { AuthGuard } from '../service/auth.guard';

@NgModule({
    imports: [
        CommonModule,
        RouterModule,
        ReactiveFormsModule,
        TranslateModule,
        CoreRoutingModule,
        SharedModule
    ],
    providers: [
        TranslateService,
        ConfigService,
        AuthGuard
    ],
    declarations: [
        CoreComponent
    ]
})
export class CoreModule { }
