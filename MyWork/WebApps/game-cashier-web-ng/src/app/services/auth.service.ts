import { Injectable }      from '@angular/core';
import { Router }          from '@angular/router';

import { Endpoint }        from '../enums/endpoint.enum';
import { RestService }     from './rest.service';
import { StorageService }  from './storage.service';

@Injectable()
export class AuthService {

  constructor(
        public router:Router,
        public restService:RestService,
        public storageService:StorageService
  ){ }

  login( email:string, password:string ):Promise<any> {
        return new Promise( ( res, rej ) => {
            this.restService.get(Endpoint.AUTH, {
                email: email,
                password: password
            }).then(
                (data) => {
                    this.storageService.set( 'game.auth_token', data.token );
                    this.router.navigate(['operation']);
                    res();
                }, (err) => {
                    rej(err);
                }
            )
        });
  }

  logout() {
      this.storageService.clear();
      this.router.navigate(['/login']);
  }

}
