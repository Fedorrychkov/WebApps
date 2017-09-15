import React, { Component } from 'react';
import './App.scss';

import Header from './core/header/header';
import Main from './core/main/main';

class App extends Component {
  render() {
    return (
      <div>
        <Header />
        <Main />
      </div>

    );
  }
}

export default App;
