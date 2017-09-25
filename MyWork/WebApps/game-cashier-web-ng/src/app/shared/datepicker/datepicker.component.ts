import { Component,
         HostBinding,
         Input,
         Output,
         EventEmitter,
         OnInit }            from '@angular/core';
import { TranslateService }  from '@ngx-translate/core';
import * as moment           from 'moment';

import { EventService }      from '../../services/event.service';

/**
 * Usage: <app-datepicker [date]="<string>"
 *                    [begin | end]="<boolean>"
 *                    (changeDate)="fn($event)">
 *        </app-datepicker>
 */

export interface Day {
    date:string;
    day:number;
    month:number;
    year:number;
    today:boolean;
    selected:boolean;
    prev:boolean;
    next:boolean;
    moment:moment.Moment;
}

@Component({
  selector: 'app-datepicker',
  templateUrl: './datepicker.component.html',
  styleUrls: ['./datepicker.component.scss']
})
export class DatepickerComponent implements OnInit {
  
  @Input()
  fromDate:any;
  @Input()
  toDate:any;
  
  public weekList:string[] = ['пн','вт','ср','чт','пт','сб','вс'];
  public dateFormat = 'DD-MM-YYYY';
  public currentDate:string;
  public minDate:moment.Moment;
  public maxDate:moment.Moment;
  public days:Day[] = [];
  public _month:number;
  public _year:number;

  constructor(
    public eventService:EventService
  ) { }
  
  init() {

  }

  prevMonth() {
    console.log('prev');
  }
  
  nextMonth() {
    console.log('next');
  }
  
  changeDate(event) {
    console.log(event);
  }

  ngOnInit() {
    this.currentDate = "17.17.2019"
    moment.locale( 'ru' );
    this.init();
  }

}




// /*

// mport { Component,
//          HostBinding,
//          Input,
//          Output,
//          EventEmitter,
//          OnInit }            from '@angular/core';
// import { TranslateService }  from '@ngx-translate/core';
// import * as moment           from 'moment';

// import { EventService }      from '../../services/event.service';

// /**
//  * Usage: <app-datepicker [date]="<string>"
//  *                    [begin | end]="<boolean>"
//  *                    (changeDate)="fn($event)">
//  *        </app-datepicker>
//  */

// export interface Day {
//   date:string;
//   day:number;
//   month:number;
//   year:number;
//   today:boolean;
//   selected:boolean;
//   prev:boolean;
//   next:boolean;
//   moment:moment.Moment;
// }

// @Component({
//   selector: 'app-datepicker',
//   templateUrl: './datepicker.component.html',
//   styleUrls: ['./datepicker.component.scss']
// })
// export class DatepickerComponent implements OnInit {
  
//   @Input()
//   date:string;

//   @Input()
//   begin:boolean = false;
//   @Input()
//   end:boolean = false;

//   @HostBinding('class.datepicker') true;

//   @Output()
//   changeDate:EventEmitter<moment.Moment> = new EventEmitter<moment.Moment>();
  
//   public weekList:string[] = ['пн','вт','ср','чт','пт','сб','вс'];
//   public dateFormat = 'DD-MM-YYYY';
//   public currentDate:moment.Moment;
//   public minDate:moment.Moment;
//   public maxDate:moment.Moment;
//   public days:Day[] = [];
//   public _month:number;
//   public _year:number;

//   constructor(
//     public eventService:EventService
//   ) { 
//     this.eventService.on('DATEPICKERS_UPDATE')
//       .subscribe( (date) => {
//           if(this[date[0]]) {
//             this.currentDate = date[1];
//             this.datesGenerator(date[1]);
//           }
//       });
//   }
  
//   init() {
//     this.currentDate = moment(this.date, this.dateFormat);
//     this.datesGenerator(this.currentDate);
//   }
  
//   datesGenerator(val:moment.Moment) {
//     const daysInMonth = val.daysInMonth();
//     let firstDay = moment(val).date(1).startOf('isoWeek');
//     let lastDay = moment(val).date(daysInMonth).endOf('isoWeek');
//     let startDay = moment(val).date(1).day();
//     let endDay = moment(val).date(daysInMonth).day();
//     let duration = lastDay.diff(firstDay, 'days');
//     this.days = [];

//     while(duration >= 0) {
//       const target:moment.Moment = moment(lastDay, this.dateFormat).subtract(duration, 'days');
//       const today:boolean = moment().isSame(target, 'day') && moment().isSame(target, 'month') ? true : false;
//       let selected:boolean = target.isSame(this.currentDate, 'day') && target.isSame(this.currentDate, 'month') ? true : false;
//       let prev:boolean = target.isAfter(this.currentDate, 'month') ? true : false;
//       let next:boolean = target.isBefore(this.currentDate, 'month') ? true : false;
//       let ranged:boolean;
//       if(this.begin) {
//           ranged = target.isAfter(this.currentDate, 'day')? true: false;
//       }
//       if(this.end) {
//           ranged = target.isBefore(this.currentDate, 'day')? true: false;
//       }

//       let day:Day = {
//         date: target.format(this.dateFormat),
//         day: target.date(),
//         month: target.month() + 1,
//         year: target.year(),
//         today: today,
//         selected: selected,
//         prev: prev,
//         next: next,
//         moment: target
//       };

//       this.days.push(day);

//       duration --;
//     }
//   }

//   selectDate(day:Day) {
//     this.days.map( (item) => {
//       item.selected = day.moment.isSame(item.moment, 'day') && day.moment.isSame(item.moment, 'month') ? true: false;
//     });

//     this.currentDate = day.moment;
//     this.datesGenerator(this.currentDate);
//     this.changeDate.emit(this.currentDate);
//   }

//   prevMonth() {
//     this.currentDate.subtract(1, 'months');
//     this.datesGenerator(this.currentDate);
//     this.changeDate.emit(this.currentDate);
//   }

//   nextMonth() {
//     this.currentDate.add(1, 'months');
//     this.datesGenerator(this.currentDate);
//     this.changeDate.emit(this.currentDate);
//   }

//   ngOnInit() {
//     this.init();
//   }

// }

// */