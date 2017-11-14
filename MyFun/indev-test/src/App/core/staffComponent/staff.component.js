import React, { Component } from 'react';
import './staff.component.scss';
import StuffService from '../../services/stuff.services';

export default class StaffComponent extends Component {
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
      <div className="">
      </div>
    );
  }
}

