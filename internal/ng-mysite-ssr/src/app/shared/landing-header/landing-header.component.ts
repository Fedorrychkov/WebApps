import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-landing-header',
  templateUrl: './landing-header.component.html',
  styleUrls: ['./landing-header.component.scss']
})
export class LandingHeaderComponent implements OnInit {
  public navlinks: any;

  constructor() {
    this.navlinks = [
      {type: 'nav', title: 'Обо мне', url: 'about'},
      {type: 'nav', title: 'Опыт', url: 'skills'},
      {type: 'nav', title: 'Проекты', url: 'projects'},
      {type: 'nav', title: 'Контакты', url: 'contacts'}
    ];
  }

  ngOnInit() {
  }

}
