import { MarketingSettings } from './marketingSettings';

export interface Info {
  id:number;
  name:string;
  dateCreated:string;
  email:string;
  company:BaseCompanyInfo;
  awardForSaleEnabled:boolean;
  maxScoresDiscount?:number;
  currentBalance:number;
  bufferedBalance?:number;
  servicingRating?:string
}

export interface BaseCompanyInfo {
  id:number;
  name:string;
  annotation:string;
  categories:string[];
  description:string;
  state:string;
  websites:string[];
  dateCreated:string;
  lastUpdated:string;
  marketingSettings:MarketingSettings;
  writeInvoice:boolean;
  baseDiscountPolicy:string;
  servicingRating:number;
  timeZone:string;
  pricelistEnabled:boolean;
  joiningAwardScores?:number;
  currency?:string;
  loyaltyProgram?:string
}

export interface CompanyBranch {
  address?:string;
  location?:Location;
  cityPlaceId?:string;
  phones?:string[];
  addressDescription?:string;
  openingHours:OpeningHours[]; //TODO: переписать как тут https://canonium.com/articles/typescript-generics
}

export interface Location {
  lng:number;
  lat:number;
}

export interface OpeningHours {
  fromHour:string;
  toHour:string;
  weekday:string;
}
