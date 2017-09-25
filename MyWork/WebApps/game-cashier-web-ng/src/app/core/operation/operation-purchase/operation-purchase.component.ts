import { Component, OnInit, Input } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

import { SharedActionService }                from '../../../services/shared-action.service';

@Component({
  selector: 'app-operation-purchase',
  templateUrl: './operation-purchase.component.html',
  styleUrls: ['./operation-purchase.component.scss']
})
export class OperationPurchaseComponent implements OnInit {
  
  @Input()
  message:string = '';
  @Input()
  promoCode:string = '';
  @Input()
  isPhone:boolean = true;

  public operationForm:any;
  public cash:string;
  public discountRate:number | string;
  public invoiceNumber:string;
  
  constructor(
    public fb:FormBuilder,
    public sharedActionService:SharedActionService
  ) { }
  
  purchasePay(cash, invoiceNumber, total) {
    this.sharedActionService.purchasePay(this.promoCode, invoiceNumber, total, cash)
      .then(
        (data) => {
          console.log(data);
        }, (err) => {
          console.log(err);
        }
      )
  }

  submit( opts:any ) {
    if(opts.cash) {
      this.cash = opts.cash;
      this.invoiceNumber = opts.invoiceNumber;
      this.discountRate = opts.discountRate;
      
      this.purchasePay(this.cash, this.invoiceNumber, this.cash,);
    } else {
      console.log('input is empty');
    }
  }

  ngOnInit() {
    this.isPhone? this.discountRate = "Недоступно для оплаты по номеру телефона" : this.discountRate = "";

    this.operationForm = this.fb.group({
        cash: [this.cash, [ Validators.required ]],
        discountRate: [{value: this.discountRate, disabled: this.isPhone}, [ Validators.required ]],
        invoiceNumber: [this.invoiceNumber, [ Validators.required ]]
    });
  }

}

// TODO: Нужно доделать для дисконта. + разобраться со скидками.