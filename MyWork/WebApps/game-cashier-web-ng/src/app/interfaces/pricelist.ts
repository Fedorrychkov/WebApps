import { CashierCustomer } from './customer';
import { Image } from './image';

export interface PriceListOrder {
  id:number;
  scores?:number;
  cash?:number;
  totalScores?:number;
  totalCash?:number;
  dateCreated:string;
  discountCash:number;
  state:string;
  customer?:CashierCustomer;
  items:PriceListOrderItem[];  //TODO: rewrite like this https://canonium.com/articles/typescript-generics
}

export interface PriceListOrderItem {
  id:number;
  item:PriceListItem;
  priceForCash:number;
  priceForScores:number;
  totalPriceForCash?:number;
  totalPriceForScores?:number;
  count:number;
}

export interface PriceListItem {
  id?:number;
  sku?:string;
  category?:PriceListCategory;
  name?:string;
  description?:string;
  priceForCash?:number;
  priceForScores?:number;
  image?:Image;
  dateCreated?:string;
}

export interface PriceListCategory {
  id?:number;
  name?:string;
  priceCount?:number;
}
