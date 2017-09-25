import { Component,
         Input,
         ElementRef,
         OnInit }          from '@angular/core';
import { Http, Response }  from '@angular/http';

/**
 * Usage: <icon name="<string>"
 *              fill?="<string>">
 *        </icon>
 */

@Component({
    selector: 'icon',
    templateUrl: './icon.component.html',
    styleUrls: ['./icon.component.scss']
})
export class IconComponent implements OnInit {
    @Input()
    name: string;
    @Input()
    fill: string;

    constructor(
        private _http: Http,
        private _el: ElementRef
    ) { }

    loadSvg() {
        this._http.get(`../../../../assets/icons/${this.name}.svg`)
            .map( ( res: Response ) => res.text() )
                .subscribe( (data) => {
                    if(this.fill) {
                        data = data.replace('<svg', `<svg fill="${this.fill}"`);
                    }

                    this.svgData = data
                }, (err) => {
                    console.error(err)
                }
            );
    }

    set svgData(data: any) {
        this._el.nativeElement.innerHTML = data;
    }

    ngOnInit() {
        this.loadSvg();
    }
}
