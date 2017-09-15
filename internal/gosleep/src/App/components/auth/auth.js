import React, { Component } from 'react';
import LocalStorageMixin  from 'react-localstorage';

class Auth extends Component {
    constructor(props) {
        super(props);
        this.state = {isToggleOn: true};

        // This binding is necessary to make `this` work in the callback
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick(e) {
        e.preventDefault();
        console.log('click');
        localStorage.setItem('gosleep._name', this.nickname);       
    }
    render() {
        return (
        <div>
            <form>
                <label>
                    <span className="">Представьтесь</span>
                    <input type="text" name="nickname"  placeholder=" "/>
                </label>
                <button type="submit" onClick={this.handleClick}>Начать</button>
            </form>
        </div>
    );
  }
}

export default Auth;
