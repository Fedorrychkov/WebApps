import React, { Component } from 'react';
import { Link } from 'react-router-dom'

import './header.scss';

class Header extends Component {
  render() {
    return (
      <header>
        <nav>
          <ul>
            <li><Link to='/'>Home</Link></li>
            <li><Link to='/amplifires'>Amplifires</Link></li>
          </ul>
        </nav>
      </header>
    );
  }
}

export default Header;

