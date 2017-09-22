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
            <div className="inputBox">
                <label className="input_label" htmlFor={this.props.for}>{this.props.title} </label>
                <input required type={this.props.type} id={this.props.for} name={this.props.for} className="input" /> 
            </div>

        );
    }
}