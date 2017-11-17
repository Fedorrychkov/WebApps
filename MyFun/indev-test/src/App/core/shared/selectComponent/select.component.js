import React, { Component } from 'react';
import './select.component.scss';
import SelectListComponent from './selectListComponent/select-list.component';

export default class SelectComponent extends Component {

    constructor(props) {
        super(props);
        this.state = { rank: null,
                       rankList: null,
                       errorEmpty: null,
                       isEmpty: true, 
                       isError: false,
                       isToggle: false,
                       selected: null,
                       listShow: false };
                       
        this.handleClick = this.handleClick.bind(this);
        this.listShow = this.listShow.bind(this);
    }

    componentDidMount() {
        this.setState({ rankList: this.props.rankList, rank: this.props.rank });
    }

    shouldComponentUpdate(nextProps, nextState) {
        if (this.state != nextState) {
          return true;
        }
        return false;
    }

    handleClick(e) {
        console.log(e)
        // this.setState({selected: e });  
    }

    listShow(e) {
        this.state.listShow? this.setState({listShow: false}): this.setState({listShow: true});
    }

    render() {
        var data = this.state.rankList? this.state.rankList[this.state.rank-1]: '';
        var selectList = this.state.rankList? this.state.rankList.map((rank, id) => {
            return <SelectListComponent key={rank.id}
                                        isToggle={this.state.isToggle}
                                        name={rank.name}
                                        onClick={this.handleClick}/>
        }): '';

        return (
            <label className="input-field select-field" onClick={this.listShow}>
                <input type="text"
                       readOnly
                       name={this.props.name}
                       value={data? data.name: ''}
                       className={data? "input-control input-notempty": "input-control"} />

                <span className="input-label select-label">{this.props.label}</span>
                <div className="arrow-down down"></div>

                {this.state.listShow? <div className="select-list">
                    { selectList }
                </div>: ''}
            </label>
        );
    }
}

