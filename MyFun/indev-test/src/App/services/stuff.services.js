import React from 'react';
import axios from 'axios';
// import { environment } from '../../environment/environment';



export default class StuffService extends React.Component{
    
    static getValue() {
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
}
