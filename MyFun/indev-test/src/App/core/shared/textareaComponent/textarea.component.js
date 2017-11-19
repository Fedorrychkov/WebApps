import React, { Component } from 'react';
import './textarea.component.scss';

export default class TextareaComponent extends Component {

    constructor(props) {
        super(props);
        this.state = { description: null, isEmpty: true, data: null };
        this.handleChange = this.handleChange.bind(this);
    }

    componentDidMount() {
        this.props.data? this.setState({ isEmpty: false }): this.setState({ isEmpty: true });
    }

    shouldComponentUpdate(nextProps, nextState) {
        if (this.state != nextState) {
          return true;
        }
        return false;
    }

    handleChange(e) {
        e.target.value.length > 0? this.setState({ isEmpty: false }): this.setState({ isEmpty: true });
    }

    render() {
        return (
            <label className="textarea-field">
                <textarea 
                    name={this.props.name} 
                    className={this.state.isEmpty? "textarea-control": "textarea-control textarea-notempty"}
                    onChange={this.handleChange}>
                          {this.props.data}
                </textarea>
                <span className="textarea-label">{this.props.label}</span>
            </label>
        );
    }
}

