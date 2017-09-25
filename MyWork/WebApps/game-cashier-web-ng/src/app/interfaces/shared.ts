import { CashierCustomer, CustomerCompanyInfo } from './customer';
import { PriceListOrder } from './pricelist';
import { Offer } from './offer';

export interface SharedInfo {
  promoCode:string;
  type:string;
  dateCreated:string;
  data:{
    anyOf?:{
      PURCHASE?:CashierCustomer;
      PRICE_LIST_ORDER?:PriceListOrder;
      OFFER?:Offer;
    }
  }
}

export interface SharedResult {
  promoCode:string;
  type:string;
  dateCreated:string;
  data:{
    anyOf?:{
      JOIN_COMPANY?:CustomerCompanyInfo;
      PRICE_LIST_ORDER?:PriceListOrder;
      PURCHASE?:Offer;
    }
  }
}
