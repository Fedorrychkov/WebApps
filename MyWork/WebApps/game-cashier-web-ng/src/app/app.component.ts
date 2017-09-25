import { Component, OnInit } from '@angular/core';
import { Router }                   from '@angular/router';
import { StorageService }           from './services/storage.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'app';

  constructor(
    public router:Router,
    public storageService:StorageService
  ){}

  logout() {
    this.storageService.clear();
  }

  ngOnInit() {
    console.log('OnInit');
    // if(!this.storageService.has('game.auth_token')) {
    //     return false;
    // }
    // this.router.navigate(['/auth'])
    // return false;
  }
}
