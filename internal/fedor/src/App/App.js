import React, { Component } from 'react';

import HeaderComponent from './core/header/header';
import WelcomeComponent from './core/welcome/welcome';

class App extends Component {
  
  render() {
    return (
      <div className="app">
        <HeaderComponent />
        <main className="main">
          <WelcomeComponent />
          <section className="content">

          </section>
        </main>
      </div>
    );
  }
}

export default App;
