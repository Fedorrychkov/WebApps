import React, { Component } from 'react';
import LocalStorageMixin  from 'react-localstorage';

import logo from './logo.svg';
import './App.css';

import Auth from './components/auth/auth';

class App extends Component {
  render() {
    let time = new Date();
    let wish = '';
    let hours = time.getHours();
    if (hours = 19) {
      wish = 'Доброго вечерочка!';
    }
    console.log(wish);
    console.log(hours);
    
    var Logged;
    if(localStorage.getItem('nickname')) {
      Logged = 'login';
    }else{
      Logged = <Auth/>;
    }
    
    localStorage.setItem('myData', 'data');
    return (
      <div className="App">
        {Logged}
        
        <div className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h2>Welcome to React</h2>
        </div>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
      </div>
    );
  }
}

export default App;
