import React, {Component} from 'react';

import './lang.scss';
import globe from './globe.svg';

export default class LangComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {
            english: true
        }
        this.changeLang = this.changeLang.bind(this);
    }

    changeLang() {
        this.setState({english: !this.state.english});
        localStorage.setItem('enlang', this.state.english);
    }
    
    render() {
        return (
            <div className="lang" onClick={this.changeLang}>
                <div className="lang__img">
                    <img src={globe} alt="globe"/>
                </div>
                <div className="lang__items">
                    <div className="lang__item" style={{display: (this.state.english? 'block':'none')}}>En</div>
                    <div className="lang__item" style={{display: (this.state.english? 'none':'block')}}>Рус</div>
                </div>
            </div>
        );
    }
}