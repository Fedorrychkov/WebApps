import { ChangeDetectionStrategy, ChangeDetectorRef } from '@angular/core';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-core',
  templateUrl: './core.component.html',
  styleUrls: ['./core.component.scss']
})

export class CoreComponent implements OnInit {
    public clientList: any;
    public isCallEvent = false;

    constructor(
        private cdRef: ChangeDetectorRef
    ) {
        this.mainEvents();
    }

    mainEvents() {
    }

    ngOnInit() {
        this.mainEvents();
    }

}
