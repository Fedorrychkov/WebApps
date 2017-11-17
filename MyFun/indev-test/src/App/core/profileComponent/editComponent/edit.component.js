import React, { Component } from 'react';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';

import moment from 'moment';

import './edit.component.scss';
import reload from '../../../assets/img/reload.png';
import InputComponent from '../../shared/inputComponent/input.component';
import SelectComponent from '../../shared/selectComponent/select.component';

export default class EditComponent extends Component {

    constructor(props) {
        super(props);
        this.state = {
            ranks: [
                {id: 1, name: "Рядовой"},
                {id: 2, name: "Сержант"},
                {id: 3, name: "Полковник"}
            ],
            startDate: moment()
        };
        
        this.handleChange = this.handleChange.bind(this);
    }
    
    handleChange(date) {
        this.setState({
            startDate: date
        });
    }
    
    render() {
        return (
        <article className="profile edit">
            <div className="profile--left edit--left">
            <img src="http://view.indev-group.eu/images/test_api/captain.jpg" className="profile--avatar edit--avatar" />
            <div className="edit--reload-img">
                <img src={reload} className="edit--reload-icon"/>
                <p>Обновить фотографию</p>
            </div>
            </div>
            <div className="profile--right edit--right">
            <div className="profile--content edit--content">
                <InputComponent name="last_name"
                                label="Фамилия" />
                <InputComponent name="first_name"
                                label="Имя" />
                <DatePicker
                    selected={this.state.startDate}
                    onChange={this.handleChange}
                />

                <SelectComponent name="rank" 
                                label="Звание"
                                rankList={this.state.ranks}
                                rank="2" />

            </div>
            <div className="profile--bottom edit--bottom">
                <button className="button button--success">Сохранить</button>
                <button className="button">Удалить</button>
            </div>
            </div>
        </article>
        );
    }
}

