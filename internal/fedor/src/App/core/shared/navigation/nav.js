import React, {Component} from 'react';

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
        
        const nav = [
            {id: 0, name: 'About', url: '#'},
            {id: 2, name: 'Skills', url: '#'},
            {id: 3, name: 'Portfolio', url: '#'},
            {id: 4, name: 'Contact', url: '#'}
        ];

        return nav.map((item) => (
            <LinkComponent key={item.id} name={item.name} url={item.url}/>
        ))
    }

    render() {
        return (
            <nav className="navigation">
                <ul className="navigation__items">{
                    this.componentDidMount()
                }
                <LangComponent />
                </ul>
                
            </nav>
        );
    }
}