import React, { Component } from 'react';

export default class SelectListComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {
            // isToggle: this.props.isToggle
        };
    }
    
    shouldComponentUpdate(nextProps, nextState) {
        if (this.state != nextProps) {
          return true;
        }
        return false;
    }

    render() {
        return (
            <div onClick={() => this.props.onClick(console.log(this.props))} className={this.props.isToggle? "select-list--item-active select-list--item": "select-list--item"}>{this.props.name}</div> 
        );
    }
}

