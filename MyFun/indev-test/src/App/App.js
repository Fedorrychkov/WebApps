import React, { Component } from 'react';

import search from './assets/img/search.svg';
import './App.scss';
import StuffService from './services/stuff.services';

export default class App extends Component {
  componentDidMount() {
    this.Value();
  }

  Value() {
    
    StuffService.getValue(this.params)
    .then(
      (data) => {
        console.log(data);
      }
    )

  }
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

        <main className="wrapper">
          <div className="pane updateusercontent">
            <div className="pane-head pane-inner pane-head--controls">
              <div className="pane-head--left pane-control--flex">
                <img className="pane-control--icon" src={search} />
                <form method="GET" className="pane-control--form">
                  <label className="pane-control--field">
                    <input type="text" name="search" className="pane-control--input" />
                    <span className="pane-control--label">Поиск</span>
                  </label>
                </form>
              </div>
              <div className="pane-head--right">
                
              </div>
            </div>
            <div className="pane-body">
            </div>
          </div>
        </main>
      </div>
    );
  }
}

