import React, { Component } from 'react';
import './knowns.scss';

export default class KnowsComponent extends Component {
    
    render() {
        return (
            <div className="knowns">
                <div className="knowns-arg">
                    <span className="knowns-know">I can do </span><span className="knowns-things"> Web apps</span>
                </div>
            </div>
        );
    }
}