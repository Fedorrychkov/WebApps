import { Injectable }             from '@angular/core';
import { Http,
         Headers,
         Response,
         RequestOptions }         from '@angular/http';
//import { TranslateService }       from '@ngx-translate/core';
import { Endpoint }               from '../enums/endpoint.enum';
import { KeyVal, RequestParams }  from '../interfaces/rest';
import { StorageService }         from './storage.service';
import { environment }            from '../../environments/environment';

@Injectable()
export class RestService {
    public apiUrl:string;

    public serialize(obj, prefix?: any) {
        var str = [];
        for (var p in obj) {
            if (obj.hasOwnProperty(p)) {
                var k = prefix ? prefix : p, v = obj[p];
                str.push(typeof v == 'object' ?
                                        this.serialize(v, k) :
                                        `${encodeURIComponent(k)}=${encodeURIComponent(v)}`);
            }
        }
        return str.join("&");
    }

    constructor(
        public http:Http,
        //public translateService:TranslateService,
        public storageService:StorageService
    ) {
        this.apiUrl = environment.apiURL;
    }

    request<T>(params:RequestParams, endpoint:Endpoint):Promise<Response> {
        return new Promise<Response>((res, rej) => {

            if(!environment.production) {
                var date:any = new Date();
                var start:string = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
                console.log(`${start}: Request [${params.method}] ${params.url}`);
            }

            this.http.request(params.url, {
                method: params.method,
                headers: params.headers,
                body: params.body,
            })
            .subscribe((data:Response) => {
                if (data.status === 204 && data.text() == "") {
                    res();
                } else {
                    try {
                        if (data.text() != "OK") {
                            if( /^application\/vnd\./.test(data.headers.get('content-type')) ) {
                                res(data);
                            } else {
                                res(JSON.parse(data.text()));
                            }
                        } else {
                            res();
                        }
                    } catch (e) {
                        rej(e);
                    }
                }
                if(!environment.production) {
                    var end:any = new Date();
                    var endDate:string = `${end.getHours()}:${end.getMinutes()}:${end.getSeconds()}`;
                    console.log(`end at ${ endDate}, ${ end - date }`);
                }
            }, (err) => {
                if (err && err.status === 401 && endpoint != Endpoint.AUTH) {
                    this.storageService.remove('game.auth_token');
                }
                rej(err);
            });
        });
    }

    get<T>(endpoint:Endpoint, data?:any, headers?:KeyVal[]):Promise<any> {
        var reqParams = this.paramsByEndpoint(endpoint);
        if (headers) {
            headers.forEach((h) => {
                if(reqParams.headers.has(h.key)) {
                    reqParams.headers.set(h.key, h.val);
                } else {
                    reqParams.headers.append(h.key, h.val);
                }
            });
        }

        let results = [];
        let re = /{([^}]+)}/g;
        let text;

        while (text = re.exec(reqParams.url)) {
            results.push(text[1]);
        }

        for (let i = 0; i < results.length; i++) {
            if (data[results[i]]) {
                reqParams.url = reqParams.url.replace(`{${results[i]}}`, data[results[i]]);
            } else {
                reqParams.url = reqParams.url.replace(`/{${results[i]}}`, '');
            }
        }

        if (data) {
            results.forEach( (item) => {
                if (data.hasOwnProperty(item)) {
                    delete data[item];
                }
            });

            this.paramsBody(reqParams, data);
        }

        return this.request<T>(reqParams, endpoint);
    }

    paramsBody( params:RequestParams, data:any ):RequestParams {
        if( ['get', 'delete'].indexOf(params.method) !== -1 ) {
            let str = this.serialize(data);
            if(str) {
                params.url = `${params.url}?${str}`;
            }
        } else {
            params.body = JSON.stringify(data);
        }
        return params;
    }

    paramsByEndpoint( endpoint:Endpoint ):RequestParams {
        var params:RequestParams;
        var headers:Headers = new Headers();

        switch (endpoint) {
            case Endpoint.AUTH: // authorization
                params = {
                    url: '/auth',
                    method: 'post'
                }
                break;
            case Endpoint.CUSTOMER:
                params ={
                    url: '/customer/{id}',
                    method: 'get'
                }
                break;
            case Endpoint.INFO:
                params ={
                    url: '/info',
                    method: 'get'
                }
                break;
            case Endpoint.OPERATIONS:
                params ={
                    url: '/operations',
                    method: 'get'
                }
                break;
            case Endpoint.OPERATIONS_OFFER:
                params ={
                    url: '/operations/offer',
                    method: 'post'
                }
                break;
            case Endpoint.TOTALS:
                params ={
                    url: '/totals',
                    method: 'get'
                }
                break;
            case Endpoint.SHARED:
                params ={
                    url: '/shared-action',
                    method: 'get'
                }
                break;
            case Endpoint.SHARED_CREATE:
                params ={
                    url: '/shared-action',
                    method: 'post'
                }
                break;
            case Endpoint.SHARED_UPDATE:
                params ={
                    url: '/shared-action',
                    method: 'put'
                }
                break;
            default:
                break;
        }

        params.url = this.apiUrl + params.url;

        headers.append('Accept-Language', 'ru');//this.translateService.currentLang

        if( ['post', 'put', 'patch'].indexOf(params.method) !== -1 ) {
            headers.append('Content-Type', 'application/json');
        }

        if( this.storageService.has('game.auth_token') ) {
            headers.append('authorization', 'Bearer ' + this.storageService.get('game.auth_token'));
        }
        params.headers = headers;
        console.log(params);
        return params;
    }

}
