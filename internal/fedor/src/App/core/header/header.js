import React, { Component } from 'react';

import './header.scss';
import NavComponent from '../shared/navigation/nav';

export default class HeaderComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {}
    }
    
    componentDidMount() {
    
    }

    render() {
        return (
            <header className="header wrapper">
                <div className="logo">
                    <h1><span>F</span>yodor <span>R</span>ychkov<span>.</span></h1>
                </div>
                <div>
                    <NavComponent />
                </div>
            </header>
        );    
    }
}