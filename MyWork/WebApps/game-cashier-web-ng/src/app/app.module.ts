import { BrowserModule }                     from '@angular/platform-browser';
import { BrowserAnimationsModule }           from '@angular/platform-browser/animations';
import { NgModule, APP_INITIALIZER }         from '@angular/core';
import { FormsModule,
         ReactiveFormsModule }               from '@angular/forms';
import { HttpModule, Http }                  from '@angular/http';
import { RouterModule }                      from '@angular/router';
import { TranslateModule, TranslateLoader }  from '@ngx-translate/core';
import { TranslateHttpLoader }               from '@ngx-translate/http-loader';

import { AppRoutingModule }                  from './app-routing.module';
import { AppComponent }                      from './app.component';

import { StorageService }                    from './services/storage.service';
import { RestService }                       from './services/rest.service';
import { AuthService }                       from './services/auth.service';
import { AuthGuard }                         from './services/auth.guard';
import { ProfileService }                    from './services/profile.service';
import { PromoService }                      from './services/promo.service';
import { SharedActionService }               from './services/shared-action.service';
import { HistoryService }                    from './services/history.service';
import { EventService }                    from './services/event.service';

import { OperationComponent }                from './core/operation/operation.component';
import { HistoryComponent }                  from './core/history/history.component';
import { InviteComponent }                   from './core/invite/invite.component';
import { ProfileComponent }                  from './core/profile/profile.component';
import { LoginComponent }                    from './core/login/login.component';
import { SidebarComponent }                  from './shared/sidebar/sidebar.component';
import { NavbarComponent }                   from './shared/navbar/navbar.component';
import { IconComponent }                     from './shared/ui/icon/icon.component';
import { OperationPurchaseComponent } from './core/operation/operation-purchase/operation-purchase.component';
import { MessageComponent } from './shared/message/message.component';
import { TotalsComponent } from './core/history/totals/totals.component';
import { CardComponent } from './shared/card/card.component';
import { DatepickerComponent } from './shared/datepicker/datepicker.component';
import { InfiniteScrollModule }          from 'ngx-infinite-scroll';
import { PreloaderComponent } from './shared/preloader/preloader.component';

@NgModule({
  declarations: [
    AppComponent,
    OperationComponent,
    HistoryComponent,
    InviteComponent,
    ProfileComponent,
    LoginComponent,
    SidebarComponent,
    NavbarComponent,
    IconComponent,
    OperationPurchaseComponent,
    MessageComponent,
    TotalsComponent,
    CardComponent,
    DatepickerComponent,
    PreloaderComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    FormsModule,
    ReactiveFormsModule,
    HttpModule,
    RouterModule,
    AppRoutingModule,
    InfiniteScrollModule
    // TranslateModule.forRoot({
    //   loader: {
    //       provide: TranslateLoader,
    //       useFactory: (createTranslateLoader),
    //       deps: [ Http ]
    //   }
    // })
  ],
  providers: [
    StorageService,
    RestService,
    AuthGuard,
    AuthService,
    ProfileService,
    SharedActionService,
    PromoService,
    HistoryService,
    EventService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
