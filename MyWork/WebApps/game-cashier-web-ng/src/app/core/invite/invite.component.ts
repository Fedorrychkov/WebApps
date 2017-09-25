import { Component }      from '@angular/core';

import { SharedInfo }             from '../../interfaces/shared';
import { Info }                   from '../../interfaces/info';
import { SharedActionService }    from '../../services/shared-action.service';
import { ProfileService }         from '../../services/profile.service';
import { PromoService }         from '../../services/promo.service';

import { environment }            from '../../../environments/environment';

@Component({
  selector: 'app-invite',
  templateUrl: './invite.component.html',
  styleUrls: ['./invite.component.scss']
})

export class InviteComponent {

  public promoUrl:string = environment.promoUrl;
  public profile:Info[] = [];
  public Invite:SharedInfo[] = [];

  public companyId:number;
  public promoCode:string;
  public qrCode:string;
  public loaded:boolean = false;

  constructor(
    public sharedActionService:SharedActionService,
    public promoService:PromoService,
    public profileService:ProfileService
  ) {
    this.getCompanyId();
    this.getPromo();
  }

  getCompanyId(){
    this.profileService.getInfo()
      .then(
           (data) => {
               this.profile = data;
               this.companyId = this.profile['company'].id;
           },
           (error) => {
           }
      )
  }

  getPromo() {
    this.sharedActionService.Invite(this.companyId)
      .then(
        (data) => {
          this.promoCode = data.promoCode;
          this.getQrCode();
        }
      )
  }

 getQrCode() {
    this.promoService.getQrCode(this.promoUrl, this.promoCode)
      .then(
        (data) => {
          this.qrCode = data;
        }
      ).then(
        () => {
          this.loaded = true;
        }
      )
  }

}
