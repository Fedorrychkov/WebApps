import { AuthGuard } from './service/auth.guard';
import { StorageService } from './service/storage.service';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule, APP_INITIALIZER } from '@angular/core';

import { RouterModule } from '@angular/router';
import { HttpModule, Http } from '@angular/http';
import { HttpClient, HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { TranslateModule, TranslateLoader, MissingTranslationHandler, MissingTranslationHandlerParams } from '@ngx-translate/core';
import { TranslateHttpLoader } from '@ngx-translate/http-loader';
import { FormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { AppRoutingModule } from './app-routing.module';

import { ConfigService } from './service/config.service';

export function ConfigLoader(configService: ConfigService) {
  return () => configService.load('./config.json');
}
export function createTranslateLoader(http: HttpClient) {
  console.log('App Module', Date.now());
  return new TranslateHttpLoader(http, './assets/i18n/', '.json');
}
export class MyMissingTranslationHandler implements MissingTranslationHandler {
  handle(params: MissingTranslationHandlerParams) {
      return console.log('!!! Translation Error');
  }
}

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'ng-portfolio' }),
    HttpModule,
    HttpClientModule,
    FormsModule,
    RouterModule,
    AppRoutingModule,
    TranslateModule.forRoot({
      loader: {
          provide: TranslateLoader,
          useFactory: (createTranslateLoader),
          deps: [ HttpClient ]
      }
    })
  ],
  providers: [
    ConfigService,
    StorageService,
    AuthGuard
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
