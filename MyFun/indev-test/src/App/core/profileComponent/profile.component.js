import React, { Component } from 'react';
import './profile.component.scss';

export default class ProfileComponent extends Component {
  
  render() {
    return (
        
    <article className="profile">
        <div className="profile--left">
          <img src={this.props.image} className="profile--avatar" />
        </div>
        <div className="profile--right">
          <div className="profile--content">
            <h3 className="profile--name">{this.props.firstName} {this.props.lastName}</h3>
            <p className="profile--birthday">{this.props.birthday}</p>
            <p className="profile--rank">{this.props.rank}</p>
          </div>
          <div className="profile--bottom">
            <button className="button button--success">Редактировать</button>
          </div>
        </div>
    </article>
    );
  }
}

