import React, { Component } from 'react';

import {store} from '../../Store/store';
import './header.scss';
import NavComponent from '../shared/navigation/nav';


function enLogo() {
    return <h1><span>F</span>edor <span>R</span>ychkov<span>.</span></h1>;
}
function ruLogo() {
    return <h1><span>Ф</span>ёдор <span>Р</span>ычков<span>.</span></h1>;
}

export default class HeaderComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {}
    }
    
    componentDidMount() {
        let lang = store.getState().enlang;
        store.subscribe(() => this.forceUpdate());
        
        switch(JSON.parse(lang)) {
            case true: return enLogo();
            case false: return ruLogo();
            default: return enLogo();
        }
    }

    render() {
        return (
            <header className="header wrapper">
                <div className="logo">
                    {this.componentDidMount()}
                </div>
                <div>
                    <NavComponent />
                </div>
            </header>
        );    
    }
}