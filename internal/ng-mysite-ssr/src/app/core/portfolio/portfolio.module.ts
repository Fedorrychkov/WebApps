import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { TranslateService } from '@ngx-translate/core';

import { PortfolioComponent } from './portfolio.component';
import { PortfolioComponentRoutingModule } from './portfolio-routing.module';

@NgModule({
  imports: [
    CommonModule,
    RouterModule,
    PortfolioComponentRoutingModule
  ],
  providers: [
    TranslateService
  ],
  declarations: [
    PortfolioComponent
  ],
})
export class PortfolioModule { }
