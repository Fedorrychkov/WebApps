import React from 'react';
import axios from 'axios';
import { environment } from '../../environment/environment';



export default class AuthService extends React.Component{
    
    static getValue() {
        return new Promise( (res, rej) => {
            axios.get(`${environment.apiURL}/values`)
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
