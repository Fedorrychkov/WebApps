import { MarketingSettings } from './marketingSettings';
import { OperationCustomerInfo } from './customer';
import { PriceListOrder } from './pricelist';
import { Offer } from './offer';

export interface Operations {
  id?:number;
  invoiceNumber?:string;
  total?:number;
  cash?:number;
  scoresDelta?:number;
  action?:string;
  dateCreated?:string;
  marketingSettings?:MarketingSettings;
  customer?:OperationCustomerInfo;
  priceListOrder?:PriceListOrder;
  offer?:Offer;
  discountRate?:number;
  vip?:boolean;
  discountPolicy?:string;
}

