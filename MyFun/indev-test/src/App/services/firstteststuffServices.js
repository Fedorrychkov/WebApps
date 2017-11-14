import React from 'react';
import axios from 'axios';
// import { environment } from '../../environment/environment';



export default class StuffService extends React.Component{
    
    static getValue() {
        return new Promise( (res, rej) => {
            var headers = new Headers();
            // headers.append('Content-Type', 'application/json');
            // headers.append('Accept', 'application/json');
          
            // headers.append('Access-Control-Allow-Origin', 'http://localhost:3000');
            // headers.append('Access-Control-Allow-Credentials', 'true');
          
            // headers.append('GET', 'POST', 'OPTIONS');
            
            axios.get(`http://avengers.view.indev-group.eu/test_api/staff/?query=`, {headers: headers})
                .then(
                    (data) => {
                        res(data);
                    }, (err) => {
                        rej(err);
                    }
                )
            
            // axios({
            //     method:'get',
            //     url:'http://avengers.view.indev-group.eu/test_api/staff/?query=',
            //     headers: headers,
            //     mode: 'no-cors'
            // })
            //     .then(
            //         (data) => {
            //             res(data);
            //         }, (err) => {
            //             rej(err);
            //         }
            //     )
        });

        // return new Promise( (res, rej) => {
        //     var headers = new Headers();
        //     headers.append('Content-Type', 'application/json');
        //     headers.append('Accept', 'application/json');
          
        //     headers.append('Access-Control-Allow-Origin', 'http://localhost:3000');
        //     headers.append('Access-Control-Allow-Credentials', 'true');
          
        //     headers.append('GET', 'POST', 'OPTIONS');
            
        //   fetch(`http://avengers.view.indev-group.eu/test_api/staff/?query=`, {
        //     credentials: 'include',
        //     method: 'GET',
        //     headers: headers,
        //     mode: 'no-cors'
        //   }).then(
        //         (data) => {
        //             res(data);
        //         }, (err) => {
        //             rej(err);
        //         }
        //     )
        // });
    }
}
