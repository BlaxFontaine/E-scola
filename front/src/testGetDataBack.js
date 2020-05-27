import React, {Component} from 'react';
import './assets/css/components.css'; 
import Img from './assets/img/1x/banner.png';
import Users from './components/users.js';

class testGetDataFromBack extends Component {
    
    render() {
        return (
           <div className="containerLanding">
                
                get data from back
                <Users/>
                </div> 
        )
    }
}
    
export default testGetDataFromBack;