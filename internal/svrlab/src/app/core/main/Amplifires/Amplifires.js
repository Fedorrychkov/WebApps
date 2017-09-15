import React, { Component } from 'react';
import ConfigService from '../../../service/config.service';
//import './Amplifire.scss';

class Amplifires extends Component {


  render() {
    return (
      <div>
        Amplifires Work! {ConfigService.apiUrl}
      </div>
    );
  }
}

export default Amplifires;

