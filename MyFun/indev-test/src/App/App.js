import React, { Component } from 'react';

import './App.scss';
import StaffService from './services/staff.services';
import StaffComponent from './core/staffComponent/staff.component';

export default class App extends Component {
  
  render() {
    return (
      <div className="app">
        <header className="header"></header>
        <main className="wrapper">
          <div className="pane updateusercontent">
            <div className="pane-head pane-inner">
              <h2 className="pane-head--title">Редактирование</h2>
            </div>
            <div className="pane-body">
            </div>
          </div>
        </main>

        <StaffComponent />
      </div>
    );
  }
}

