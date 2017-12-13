import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule, APP_INITIALIZER } from '@angular/core';
import { ServerModule } from '@angular/platform-server';

import { RouterModule } from '@angular/router';
import { HttpModule, Http } from '@angular/http';
import { HttpClient, HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { TranslateModule, TranslateLoader, MissingTranslationHandler, MissingTranslationHandlerParams } from '@ngx-translate/core';
import { TranslateHttpLoader } from '@ngx-translate/http-loader';
import { FormsModule } from '@angular/forms';

import { ConfigService } from './service/config.service';
import { AppRoutingModule } from './app-routing.module';
import { AppModule } from './app.module';
import { AppComponent } from './app.component';

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
  imports: [
    AppModule,
    ServerModule,
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
  bootstrap: [AppComponent],
})
export class AppServerModule { }