import React, { Component } from 'react';

import HeaderComponent from './core/header/header';
import WelcomeComponent from './core/welcome/welcome';
import ExperienceComponent from './core/experience/experience';

class App extends Component {
  
  render() {
    return (
      <div className="app">
        <HeaderComponent />
        <main className="main">
          <WelcomeComponent />
          <ExperienceComponent />
          <section className="content">
{/* Exp component */}
          </section>
        </main>
      </div>
    );
  }
}

export default App;
