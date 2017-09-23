import React, {Component} from 'react';

import './agree.scss';


export default class AgreeComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {
            agree: true
        }
        
        
    }

    render() {
        return (
            <label className="agree">
                <input type="checkbox" name="checkbox" className="checkbox" />
                <span className="agree-text">I agree to the processing of my personal data</span>
            </label>
        );
    }
}