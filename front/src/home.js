import React, {Component} from 'react';
import './assets/css/components.css'; 
import Img from './assets/img/1x/banner.png';
import {StudentEntry} from './components/StudentEntry'

class Home extends Component {
    
    render() {
        return (
           <div className="containerLanding">
                <div className="banner">
                <img width="700" src={Img} alt="E-schola" />
                toto
                </div>
                <StudentEntry/> 
           </div>
        )
    }
}
    
export default Home;