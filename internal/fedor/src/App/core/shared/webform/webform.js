import React, {Component} from 'react';

import './webform.scss';

import InputComponent from './textInput/textInput';
import AgreeComponent from './agreeCheckbox/agree';

export default class WebformComponent extends Component {

    constructor(props) {
        super(props);
        this.state = { agree: true };
    }

    render() {
        return (
            <form className="webform" autoComplete="none">
                <div className="form_title">
                    <h2>Hello, i'm <span className="job">Front<i>end</i> Developer</span></h2>
                </div>
                <InputComponent type="text" for="name" title="Your Name"/>
                <InputComponent type="email" for="email" title="Your Email"/>
                <div className="inputBox">
                    <select className="select">
                        <option>Freelance work</option>
                        <option>Recent job</option>
                    </select>
                </div>
                <div className="submitBox">
                    <button type="submit" className="button button-form">Request</button>
                    <AgreeComponent />
                </div>    
            </form>
        );
    }
}