import React, { Component } from 'react';
import './experience.scss';

import SkillsComponent from './skills/skills';

export default class ExperienceComponent extends Component {
    
    render() {
        return (
            <div className="wrapper wrapper-offset">
                <SkillsComponent />
            </div>
        );
    }
}