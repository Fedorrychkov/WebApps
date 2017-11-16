import React, { Component } from 'react';
import * as moment from 'moment';

import './staff.component.scss';
import StaffService from '../../services/staff.services';
import ProfileComponent from '../profileComponent/profile.component';

import search from '../../assets/img/search.svg';

export default class StaffComponent extends Component {
  
  constructor(props) {
    super(props);
    this.state = { staffs: null, ranks: null };
  }
  
  componentDidMount() {
    this.rankList()
    this.staffList();
    // console.log(this.staffData);
    // this.staffRender();
  }
  
  staffList() {
    StaffService.getStaffs()
    .then(
      (data) => {
          this.setState({ staffs: data.data });
      }
    )
  }

  rankList() {
    StaffService.getRank()
    .then(
      (data) => {
        console.log(data.data);
        this.setState({ ranks: data.data });
      }
    )
  }

  shouldComponentUpdate(nextProps, nextState) {
    if (this.state.staffs != nextState) {
      return true;
    }
    return false;
  }
  
  render() {
    console.log(this.state.staffs);
    var now = moment();
    var staffData = this.state.staffs? this.state.staffs.map( (staff) => { 
      return <ProfileComponent key={staff.id}
                               image={staff.image}
                               firstName={staff.first_name } 
                               lastName={staff.last_name } 
                               birthday={moment(staff.birth_date).locale('ru').format('D MMMM, YYYY')} 
                               rank={staff.post} />}) : '';
    
    return (
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
            { staffData }
          </div>
        </div>
      </main>
    );
  }
}

