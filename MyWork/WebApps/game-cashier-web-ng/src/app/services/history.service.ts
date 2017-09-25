import { Injectable } from '@angular/core';

import { RestService } from './rest.service';
import { Endpoint } from '../enums/endpoint.enum';

@Injectable()
export class HistoryService {

  constructor(
    public restService:RestService
  ) { }
  
  getHistory(params):Promise<any> {
      return new Promise( (res, rej) => {
        this.restService.get(Endpoint.OPERATIONS, params)
              .then(
                  (data) => {
                      res(data);
                  }, (err) => {
                      rej(err);
                  }
              )
      });
  }

  getTotals():Promise<any> {
      return new Promise( (res, rej) => {
        this.restService.get(Endpoint.TOTALS)
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
