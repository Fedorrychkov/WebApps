import React, {Component} from 'react';

import './webform.scss';

export default class WebformComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {

        }
        
        
    }

    render() {
        return (
            <form className="webform" autoComplete="none">
                <div className="form_title">
                    <h2>Hello, i'm <span className="job">Front<i>end</i> Developer</span></h2>
                </div>
                <div className="inputBox">
                    <label className="input_label" htmlFor="name">Your Name</label>
                    <input type="name" id="name" name="name" className="input" /> 
                </div>
                <div className="inputBox">
                    <label className="input_label" htmlFor="name">Your Name</label>
                    <input type="name" id="name" name="name" className="input" />
                </div>
                <div className="submitBox">
                    <button type="submit" className="button button-form">Request</button>
                    <div className="agree">
                        <input type="checkbox" name="checkbox" className="checkbox" />
                        <span className="agree-text">I agree to the processing of my personal data</span>
                    </div>
                </div>    
            </form>
        );
    }
}