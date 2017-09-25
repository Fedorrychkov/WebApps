import { Component, HostBinding, OnInit }     from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { parse, 
         format, 
         asYouType, 
         isValidNumber }                      from 'libphonenumber-js'

import { SharedActionService }                from '../../services/shared-action.service';

@Component({
  selector: 'app-operation',
  templateUrl: './operation.component.html',
  styleUrls: ['./operation.component.scss']
})

export class OperationComponent implements OnInit {
  public operationForm:any;
  public promoCode:string;
  public errorMessage:string = '';
  public operationType:string;
  public overlayShow:boolean = false;
  public isPhone:boolean = false;
  public isPromo:boolean = false;

  constructor(
      public fb:FormBuilder,
      public sharedActionService:SharedActionService
  ) { }
  
  keydownHandler(e) {
    if(e.keyCode === 'e') return;
  }
  Purchase(promoCode) {
    format(promoCode, 'International');
    this.isPhone = isValidNumber(promoCode);
    console.log(promoCode);
    this.sharedActionService.Purchase(promoCode)
      .then(
        (data) => {
          this.overlayShow = true;
          this.operationType = data.type;
          this.errorMessage = '';
          console.log(this.operationType, data);
        }, (err) => {
          this.overlayShow = true;
          this.errorMessage = err.json().message;
          console.log(this.errorMessage, err);

        }
      )
  }
  
  submit( opts:any ) {
    if(opts.promoCode) {
      this.promoCode = opts.promoCode;
      
      this.Purchase(this.promoCode);
    } else {
      console.log('input is empty');
    }
  }

  close() {
    this.overlayShow = false;
    this.promoCode = null;
    this.operationForm = this.fb.group({
        promoCode: [null]
    });
  }

  ngOnInit() {
    this.operationForm = this.fb.group({
        promoCode: [this.promoCode, [ Validators.required ]]
    });
  }

}
