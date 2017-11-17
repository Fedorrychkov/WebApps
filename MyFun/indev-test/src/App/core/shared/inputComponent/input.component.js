import React, { Component } from 'react';
import './input.component.scss';

export default class InputComponent extends Component {

    constructor(props) {
        super(props);
        this.state = { errorEmpty: null, isEmpty: true, isError: false };
        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(e) {
        console.log(e.target.value.length);
        e.target.value.length > 0? this.setState({isEmpty: false, 
                                                  isError: false, 
                                                  errorEmpty: null }): 
                                   this.setState({isEmpty: true,
                                                  isError: true,
                                                  errorEmpty: "!Поле не заполнено"  });
    }

    render() {
        return (
            <label className={this.state.isError? "input-field input-error": "input-field"}>
                
                <input type="text" 
                       name={this.props.name} 
                       onChange={this.handleChange} 
                       className={this.state.isEmpty? "input-control": "input-control input-notempty"} />

                <span className="input-label">{this.props.label}</span>
                { this.state.isEmpty? <span className="input-label--error">{this.state.errorEmpty}</span>: '' }
            </label>
        );
    }
}

