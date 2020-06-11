import React, { Component } from 'react';
import '../../assets/css/components.css';
import Rhino from '../../assets/img/png/teacher/icons/rhinoceros.png'
import { Container, Row, Col } from 'react-bootstrap';
import Avatar from 'react-avatar';
import axios from 'axios';


export default class TeacherBanner extends Component {
    constructor(props) {
        super(props);
        this.state = {meteo: {},
                      dateObj: new Date()
                        };
    
      }
      componentDidMount() {
        console.log('Did component mount ?');
        axios.get(`https://api.openweathermap.org/data/2.5/weather?q=Paris&appid=c907bf541d891e60f2056ef77e8a13c6`)
          .then(res => {
            this.setState({ meteo:res.data['weather'][0]['icon'] });
            console.log(res.data)
          })
      }
    
    render() {
        return (
            
                <div className='row' style={ { padding:'0px', margin:'0px' }} >
                <div className='column'style={{ paddingBottom:'10px' }} >
                <br/>
                   colonne en plus
                <br/>
                <br/>
                </div>
                <div className='column' >
                    <Avatar src = {Rhino} size="70" round={true} />
                </div>
                <div className='column' style={{ paddingBottom:'10px' , color: 'white'}}>
                    <br/>
                    Prénom Nom
                    <br/>
                    <br/>
                </div>
                <div className='column'  style={{ paddingBottom:'10px' ,color: 'white'}}>
                   <br/>
                   <div className ='Info'>{this.state.dateObj.toLocaleDateString()}</div>
                   <br/> 
                </div>
                <div className='column'>
                <Avatar src = {'http://openweathermap.org/img/wn/'+this.state.meteo+'@2x.png'} size="70" round={true} />
                </div>
                </div>
           
        );
    }
}