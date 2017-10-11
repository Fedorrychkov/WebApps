import React, { Component } from 'react';

import {store, enLang, ruLang} from '../../../Store/store';
import './nav.scss';
import LinkComponent from './link/link';
import LangComponent from '../../shared/lang/lang';


const en = [
    {name: 'About', url: '#'},
    {name: 'Skills', url: '#'},
    {name: 'Portfolio', url: '#'},
    {name: 'Contacts', url: '#'}
];
const ru = [
    {name: 'Обо мне', url: '#'},
    {name: 'Опыт', url: '#'},
    {name: 'Портфолио', url: '#'},
    {name: 'Контакты', url: '#'}
];
function enNav() {
    return en.map((item, index) => (
        <LinkComponent key={index} name={item.name} url={item.url} />
    ));
}

function ruNav() {
    return ru.map((item, index) => (
        <LinkComponent key={index} name={item.name} url={item.url} />
    ));
}


export default class NavComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }    
    componentDidMount() {
        let lang = store.getState().enlang;
        store.subscribe(() => this.forceUpdate());
        
        switch(lang) {
            case true: return enNav();
            case false: return ruNav();
            default: return enNav();
        }
        
    }

    onChange(lang) {
    }

    render() {
        return (
            <nav className="navigation">
                <ul className="navigation__items">
                    { this.componentDidMount() }
                <LangComponent />
                </ul>
                
            </nav>
        );
    }
}
