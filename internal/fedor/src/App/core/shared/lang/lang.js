import React, {Component} from 'react';

import './lang.scss';
import globe from './globe.svg';

export default class LangComponent extends Component {

    constructor(props) {
        super(props);
        this.state = { english: true };
        this.changeLang = this.changeLang.bind(this);
    }
    
    componentDidMount() {
        JSON.parse(localStorage.getItem('enlang')) !== null? this.setState({english: JSON.parse(localStorage.getItem('enlang')) }): this.setState({english: this.state.english});
    }

    changeLang() {
        this.setState({english: !this.state.english});
        localStorage.setItem('enlang', !this.state.english);
    }
    
    render() {
        return (
            <div className="lang" onClick={this.changeLang}>
                <div className="lang__img">
                    <img src={globe} alt="globe"/>
                </div>
                <div className="lang__items">
                    <div className="lang__item">{(this.state.english? 'En':'Рус')}</div>
                </div>
            </div>
        );
    }
}