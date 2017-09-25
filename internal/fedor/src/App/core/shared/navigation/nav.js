import React, { Component } from 'react';

import './nav.scss';
import LinkComponent from './link/link';
import LangComponent from '../../shared/lang/lang';

export default class NavComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {

        }
        
        
    }

    componentDidMount() {
        
        var en = [
            {name: 'About', url: '#'},
            {name: 'Skills', url: '#'},
            {name: 'Portfolio', url: '#'},
            {name: 'Contacts', url: '#'}
        ];
        var ru = [
            {name: 'Обо мне', url: '#'},
            {name: 'Опыт', url: '#'},
            {name: 'Портфолио', url: '#'},
            {name: 'Контакты', url: '#'}
        ];

        return en.map((item, index) => (
            <LinkComponent key={index} name={item.name} url={item.url} />
        ));
    }

    onChange() {
        console.log('change');
    }

    render() {
        return (
            <nav className="navigation">
                <ul className="navigation__items">{
                    this.componentDidMount()
                }
                <LangComponent onChange={this.onChange} />
                </ul>
                
            </nav>
        );
    }
}
