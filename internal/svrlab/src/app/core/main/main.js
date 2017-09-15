import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';

import Home from './Home/Home';
import Amplifires from './Amplifires/Amplifires';
import './main.scss';

class Main extends Component {
  render() {
    return (
      <main>
        <Switch>
          <Route exact path='/' component={Home} />
          <Route path='/amplifires' component={Amplifires} />
        </Switch>
      </main>
    );
  }
}

export default Main;
