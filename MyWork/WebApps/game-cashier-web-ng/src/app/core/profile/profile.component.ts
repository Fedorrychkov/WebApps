import { Component, OnInit } from '@angular/core';

import { Info } from '../../interfaces/info';
import { ProfileService } from '../../services/profile.service';
import { AuthService }                        from '../../services/auth.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {
  public profile:Info[] = [];
  public loaded:boolean = false;

  constructor(
    public profileService:ProfileService,
    public authService:AuthService
  ) {
  }

  getInfo() {
    this.profileService.getInfo()
      .then(
           (data) => {
               this.profile = data;
           }
      ).then(
        () => {
          this.loaded = true;
        }
      )
  }

  logout() {
    this.authService.logout();
  }

  ngOnInit() {
    this.getInfo();
  }

}
