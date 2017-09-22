import React, { Component } from 'react';
import './textInput.scss';

export default class InputComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
            
        }
    }

    render() {
        return(        
            <label className="inputBox" htmlFor={this.props.for}>
                <span className="input_label">{this.props.title}</span>
                <input required type={this.props.type} id={this.props.for} name={this.props.for} className="input" /> 
            </label>

        );
    }
}