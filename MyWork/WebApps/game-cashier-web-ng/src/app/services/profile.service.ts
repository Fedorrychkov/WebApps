import { Injectable }      from '@angular/core';

import { Endpoint }        from '../enums/endpoint.enum';
import { RestService }     from './rest.service';

@Injectable()
export class ProfileService {

  constructor(
        public restService:RestService
  ){ }

  getInfo(opts?:any):Promise<any> {
        return new Promise( ( res, rej ) => {
            this.restService.get(Endpoint.INFO)
              .then(
                  (data) => {
                      res(data);
                  }, (err) => {
                      rej(err);
                  }
              )
        });
  }

}
