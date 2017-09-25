import { MarketingSettings } from './marketingSettings';
import { CompanyBranch } from './info';

export interface CashierCustomer {
  id:number;
  name:string;
  dateCreated?:string;
  surname:string;
  birthDate:string;
  gender?:string;
  phone:string;
  customerStatistics:CustomerStatistics;
  skype:string;
  instagram:string;
  level?:number;
  participant?:boolean;
  scores?:number;
  vip?:boolean;
  discountRate?:number;
}

export interface CustomerStatistics {
  placesCount?:number;
  unreadFeedback?:number;
  unreadTimeline?:number;
}

export interface OperationCustomerInfo {
  id?:number;
  name?:string;
  dateCreated?:string;
}

export interface CustomerCompanyInfo {
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
  participant:boolean;
  favorite:boolean;
  scores:number;
  scoresSpent:number;
  cashSpent:number;
  level:number;
  nearestBranch?:CompanyBranch;
}
