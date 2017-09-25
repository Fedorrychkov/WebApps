import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.scss']
})
export class CardComponent implements OnInit {
  
  @Input()
  value:any;

  @Input()
  action:any;

  @Input()
  title:string;

  constructor() { }

  ngOnInit() {
  }

}
