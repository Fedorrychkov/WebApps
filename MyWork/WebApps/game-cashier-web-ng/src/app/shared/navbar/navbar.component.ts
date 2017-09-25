import { Component,
         HostBinding,
         HostListener,
         OnInit }               from '@angular/core';
import { AuthService }          from '../../services/auth.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})

export class NavbarComponent implements OnInit {
  public navlinks:any[];

  constructor(
    public authService:AuthService
  ) {
      this.navlinks = [
            {
                type: 'leftbar',
                icon: 'purchase',
                link: '/operation',
                title: 'Счёт',
            },
            {
                type: 'leftbar',
                icon: 'date',
                link: '/history',
                title: 'История'
            },
            {
                type: 'leftbar',
                icon: 'qrcode',
                link: '/invite',
                title: 'Пригласить'
            },
            {
                type: 'leftbar',
                icon: 'user',
                link: '/profile',
                title: 'Профиль'
            },
        ]
  }


  logout() {
      this.authService.logout();
  }

  ngOnInit() {
  }

}
