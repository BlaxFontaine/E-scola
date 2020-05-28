import React, {Component} from 'react';
import './assets/css/components.css'; 
import Img from './assets/img/png/home/banner.png'

class Home extends Component {
    
    render() {
        return (
           <div className="containerLanding">
                <div className="banner">
                <img width="700" src={Img} alt="E-schola" />
                toto
                </div>
           </div>
        )
    }
}
    
export default Home;