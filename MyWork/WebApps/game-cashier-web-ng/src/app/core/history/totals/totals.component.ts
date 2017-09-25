import { Component, OnInit } from '@angular/core';

import { HistoryService } from './../../../services/history.service';
import { Totals } from './../../../interfaces/totals';

@Component({
  selector: 'app-history-totals',
  templateUrl: './totals.component.html',
  styleUrls: ['./totals.component.scss']
})
export class TotalsComponent implements OnInit {
  public total:Totals[] = [];
  
  constructor(
    public historyService:HistoryService
  ) { 
    this.getTotals();
  }
  
  getTotals() {
    this.historyService.getTotals()
      .then(
        (data) => {
          this.total = data;
          console.log(this.total);
        }
      )
  }

  ngOnInit() {
  }

}
