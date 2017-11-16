import React from 'react';
import axios from 'axios';
// import { environment } from '../../environment/environment';



export default class StaffService extends React.Component{
    
    static getStaffs() {
        return new Promise( (res, rej) => {
            
            axios.get(`http://avengers.view.indev-group.eu/test_api/staff/?query=`)
                .then(
                    (data) => {
                        res(data);
                    }, (err) => {
                        rej(err);
                    }
                )
        });
    }

    static getRank() {
        return new Promise( (res, rej) => {
            
            axios.get(`http://avengers.view.indev-group.eu/test_api/posts/`)
                .then(
                    (data) => {
                        res(data);
                    }, (err) => {
                        rej(err);
                    }
                )
        });
    }
}
