import { Injectable }      from '@angular/core';

import { Endpoint }        from '../enums/endpoint.enum';
import { RestService }     from './rest.service';
import { ProfileService }     from './profile.service';

@Injectable()
export class SharedActionService {

  constructor(
    public restService:RestService
  ) { }

  Invite(companyId):Promise<any> {
    return new Promise( ( res, rej ) => {
      this.restService.get(Endpoint.SHARED_CREATE, {
        "actionType": "JOIN_COMPANY",
        "data": {
          "companyId": companyId
        }
      }).then(
            (data) => {
              res(data);
            }, (err) => {
              rej(err);
            }
      )
    });
  }

  Purchase(promoCode):Promise<any> {
    return new Promise( ( res, rej ) => {
      this.restService.get(Endpoint.SHARED, {
        "promoCode": promoCode
      }).then(
          (data) => {
            res(data);
          }, (err) => {
            rej(err);
          }
        )
    });
  }

  purchasePay(promoCode: number|string, invoiceNumber?:string, total?:number, cash?:number, scores?:number):Promise<any> {
    return new Promise ( (res, rej ) => {
      this.restService.get(Endpoint.SHARED_UPDATE, {
        "promoCode": promoCode,
        data: {
          "total": total,
          "cash": cash,
          "scores": scores,
          "invoiceNumber": invoiceNumber
        }
      }).then (
        (data) => {
          res(data);
        }, (err) => {
          rej(err);
        }
      )
    });
  }

}
