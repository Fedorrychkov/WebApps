import { Component } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';

import { StorageService } from './service/storage.service';
import { ConfigService } from './service/config.service';

@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.scss']
})
export class AppComponent {
    constructor(
        public configService: ConfigService,
        public translateService: TranslateService,
        public storageService: StorageService
    ) {
        const appLang = storageService.get('everyspeak.lang') || navigator.language.split('-')[0];
        const langList = this.configService.getConfig('langList');
        translateService.addLangs(langList);
        translateService.setDefaultLang(appLang);
        translateService.use(appLang);
    }

    // loadTranslation() {
    //     this.configService.loadeNew('./config.json').catch(error => console.log(error)).subscribe(response => {});
    // }
}
