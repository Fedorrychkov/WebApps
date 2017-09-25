import { Injectable } from '@angular/core';

@Injectable()
export class PromoService {

  constructor() { }
  
  getQrCode(promoUrl, promoCode):Promise<string> {
      return new Promise( (res, rej) => {
          let code = `${promoUrl}?s=300&text=${promoCode}`;
          res(code);
      })
  }
  
}
