import React, {Component} from 'react';

import './webform.scss';

import {store} from '../../../Store/store';
import InputComponent from './textInput/textInput';
import AgreeComponent from './agreeCheckbox/agree';

function helloEn() {return <h2>Hello, i'm <span className="job">Front<i>end</i> Developer</span></h2>;}
function helloRu() {return <h2 className="medium">Привет, я <span className="job">Front<i>end</i> разработчик</span></h2>;}
function yourNameEn() { return 'Your Name';}
function yourNameRu() { return 'Ваше Имя';}
function yourEmailEn() { return 'Your Email';}
function yourEmailRu() { return 'Ваша почта';}
function yourButtonEn() {return 'Send';}
function yourButtonRu() {return 'Отправить';}
function yourJobType1En() {return 'Freelance project';}
function yourJobType1Ru() {return 'Фриланс проект';}
function yourJobType2En() {return 'Full time job';}
function yourJobType2Ru() {return 'Постоянная работа';}
function agreeTextEn() {return 'I agree to the processing of my personal data';}
function agreeTextRu() {return 'Я даю согласие на обработку своих персональных данных';}

export default class WebformComponent extends Component {

    constructor(props) {
        super(props);
        this.state = { agree: true };
    }

    componentDidMount() {
        store.subscribe(() => this.forceUpdate());
    }

    updateHello() {
        switch(JSON.parse(store.getState().enlang)) {
            case true: return helloEn();
            case false: return helloRu();
            default: return helloEn();
        }
    }
    updateName() {
        switch(JSON.parse(store.getState().enlang)) {
            case true: return yourNameEn();
            case false: return yourNameRu();
            default: return yourNameEn();
        }
    }
    updateEmail() {
        switch(JSON.parse(store.getState().enlang)) {
            case true: return yourEmailEn();
            case false: return yourEmailRu();
            default: return yourEmailEn();
        }
    }
    updateButton() {
        switch(JSON.parse(store.getState().enlang)) {
            case true: return yourButtonEn();
            case false: return yourButtonRu();
            default: return yourButtonEn();
        }
    }
    updateJobType(type) {
        if(type === 'type1') {
            switch(JSON.parse(store.getState().enlang)) {
                case true: return yourJobType1En();
                case false: return yourJobType1Ru();
                default: return yourJobType1En();
            }
        } else {
            switch(JSON.parse(store.getState().enlang)) {
                case true: return yourJobType2En();
                case false: return yourJobType2Ru();
                default: return yourJobType2En();
            }
        }
    }
    updateAgree() {
        switch(JSON.parse(store.getState().enlang)) {
            case true: return {text: agreeTextEn()};
            case false: return {text: agreeTextRu(), class: 'small'};
            default: return {text: agreeTextEn()};
        }
    }

    render() {
        let agreeObj = {text: '', class: ''};
        agreeObj = this.updateAgree();
        return (
            <form className="webform" autoComplete="none">
                <div className="form_title">
                    {this.updateHello()}
                </div>
                <InputComponent type="text" for="name" title={this.updateName()}/>
                <InputComponent type="email" for="email" title={this.updateEmail()}/>
                <div className="inputBox">
                    <select className="select">
                        <option value={this.updateJobType('type1')}>{this.updateJobType('type1')}</option>
                        <option value={this.updateJobType('type2')}>{this.updateJobType('type2')}</option>
                    </select>
                </div>
                <div className="submitBox">
                    
                    <button type="submit" className="button button-form">{this.updateButton()}</button>
                    <AgreeComponent agreeText={agreeObj.text} styleClass={agreeObj.class} />
                </div>    
            </form>
        );
    }
}