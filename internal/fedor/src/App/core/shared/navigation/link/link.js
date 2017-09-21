import React, { Component } from 'react';

import './link.scss';

export default class LinkComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {}
    }
    
    componentDidMount() {
    
    }

    render() {
        return (
            <li className="link">
                <a className="link__item" href={this.props.url}>{this.props.name}</a>
            </li>
        );    
    }
}