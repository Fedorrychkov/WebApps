import React, {Component} from 'react';

import './lang.scss';
import globe from './globe.svg';

export default class LangComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {

        }
        
        
    }

    
    render() {
        return (
            <div className="lang">
                <div className="lang__img">
                    <img src={globe} />
                </div>
                <div className="lang__items">
                    <div className="lang_item">En</div>
                    <div className="lang_item">Рус</div>
                </div>
            </div>
        );
    }
}