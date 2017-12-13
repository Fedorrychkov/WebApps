import { Injectable } from '@angular/core';
import { Http, Headers, Response } from '@angular/http';
import { Observable } from 'rxjs/Rx';
import { environment } from '../../environments/environment';
@Injectable()
export class ConfigService {
    public config: any = {
        env: 'dev',
        langList: ['ru', 'en'],
        apiUrl: '#',
        production: false
    };
    constructor(
        public http: Http
    ) {
    }

    getConfig(key: string): any {
        return this.config[key];
    }

    // loadeNew(url: string): any {
    //     return this.http.get('url')
    //     .map(response => {});
    // }

    load(url: string): Promise<any> {
        return new Promise( (res, rej) => {
            this.http.get(url)
                .map(
                    (data) => data.json()
                ).catch(
                    (err: any): any => {
                        if (environment.production) {
                            this.config = {};
                        }
                        res(true);
                        return Observable.throw('run with local config');
                    }
                ).subscribe(
                    (response) => {
                        this.config = response;
                        res(true);
                    }
                );
        });
    }
}
