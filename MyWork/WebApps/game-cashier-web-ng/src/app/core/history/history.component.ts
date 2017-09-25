import { Component } from '@angular/core';

import { Operations } from './../../interfaces/operations';
import { HistoryService } from '../../services/history.service';

@Component({
  selector: 'app-history',
  templateUrl: './history.component.html',
  styleUrls: ['./history.component.scss']
})
export class HistoryComponent {
  public historyes:Operations[] = [];
  public max:number = 10;
  public lastId:number;
  public loaded:boolean = false;
  public params:any = {};
  public loading:boolean = true;
  
  constructor(
    public historyesService:HistoryService
  ) {
    this.getHistory();
   }
  
  getHistory() {
    this.params.max = this.max;
    this.historyesService.getHistory(this.params)
      .then(
        (data) => {
          if(data.length === 0) return;
          data.length < this.max? this.loading = false : this.loading = true;
          this.historyes = this.historyes.concat(data);
          this.params.lastId = data[data.length - 1].id;
        }
      ).then(
          () => {
            this.loaded = true;
          }
      )
  }
  
}
