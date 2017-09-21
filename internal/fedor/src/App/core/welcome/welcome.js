import React, {Component} from 'react';

import './welcome.scss';
import fb from './fb.jpg';

import WebformComponent from '../shared/webform/webform';

export default class WelcomeComponent extends Component {
    
    render() {
        return (
            <div className="wrapper welcome">
                <div></div>
                <WebformComponent />
                
                <div className="browser">
                    <div className="browser__panel">
                        <div className="panel__controls">
                            <div className="control control__close"></div>
                            <div className="control control__change"></div>
                            <div className="control control__tray"></div>
                        </div>
                        <div className="browser__address">

                        </div>
                    </div>
                    <img src={fb} alt="fedorrychkov.com" className="image"/>
                </div>
            </div>
        );
    }
}