import React, { Component } from 'react';
import '../../assets/css/components.css';
import Rhino from '../../assets/img/png/teacher/icons/rhinoceros.png'
import { Container, Row, Col } from 'react-grid-system';
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

            <Container fluid className="containerLandingT">
                <Row style={ { backgroundColor : 'black' }} align="center" height ={200}>
                <Col justify="center" width={100} height ={100} style={{padding:'20px'}} >
                    <Avatar src = {Rhino} size="70" round={true} />
                </Col>
                <Col justify="center" align="center" style={{color : 'white'}} width={200}>
                    Prénom Nom
                </Col>
                <br/>
                <Col justify="center" align="center" style={{color : 'white'}} width={200}>
                   <div className ='Info'>{this.state.dateObj.toLocaleDateString()}</div> 
                </Col>
                <Col justify="center" align="center" style={{color : 'white'}} width={200}>
                
                <Avatar src = {'http://openweathermap.org/img/wn/'+this.state.meteo+'@2x.png'} size="70" round={true} />
                
                </Col>
                </Row>
            </Container>
        );
    }
}