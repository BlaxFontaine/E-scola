import React, { Component } from 'react';
import '../../assets/css/studentspace.css';
import { LandingStudent } from './pages/landingStudent';
import { Container, Row, Col } from 'react-grid-system';
import Bear from '../../assets/img/png/student/bear.png';
import Height from '../../assets/img/png/student/height.png'
import Home from '../../assets/img/png/student/home.png';
import Lessons from '../../assets/img/png/student/lessons.png';
import Exercices from '../../assets/img/png/student/exercices.png';
import Messages from '../../assets/img/png/student/messages.png';
import Logout from '../../assets/img/png/student/logout.png';
import Avatar from 'react-avatar';
import axios from 'axios';



export class HomeStudent extends Component {

    constructor(props) {
        super(props)
        this.state = {
            whichSpace: "",
            meteo: {},
            dateObj: new Date(),

        }
    }
    handleClickMenu(which) {
        
        this.childComponent.setMenu(which);
    }


    componentDidMount() {
        console.log('Did component mount ?');
        axios.get(`https://api.openweathermap.org/data/2.5/weather?q=Paris&appid=c907bf541d891e60f2056ef77e8a13c6`)
            .then(res => {
                this.setState({ meteo: res.data['weather'][0]['icon'] });
                console.log(res.data)
            })
    }

   



    render() {
        
        return (
            <Container fluid className="containerLanding" width="100%">
                <Row className="ContainerCol" width="200%">
                    <Col className="Colleft" width="15%" >
                        <Row justify="center" width={100} height={100} style={{ padding: '20px' }} >
                            <Avatar src={Bear} size="120" round={true} />
                        </Row>
                        <Row justify="center" align="center" style={{ color: 'white' }} width={200} >Pimousse</Row>
                        <Row justify="center" align="center" style={{ color: 'white' }} width={200}>
                            <div className='Info'>{this.state.dateObj.toLocaleDateString()}</div>
                        </Row>
                        <Row justify="center" align="center" style={{ color: 'white' }} width={200}>

                            <Avatar src={'http://openweathermap.org/img/wn/' + this.state.meteo + '@2x.png'} size="70" round={true} />

                        </Row>
                        <Row justify="center"  >
                            <img src={Height} height="300" />
                        </Row>
                    </Col>

                    
                    <LandingStudent   ref={(childComponent) => {this.childComponent = childComponent}}/>
                    <Col className="Colnav" width="10%" >
                        <Row align="center" justify="center" >
                            <button>
                                <img width="70" src={Logout} alt="Se déconnecter" />
                            </button>
                        </Row>
                        <Row align="center" justify="center" >
                            <button onClick={() => this.handleClickMenu("")}>
                                <img width="70" src={Home} alt="Accueil"   />
                            </button>
                        </Row>
                        <Row align="center" justify="center" >
                            <button onClick={() => this.handleClickMenu("lessons")}>
                                <img width="70" src={Lessons} alt="Leçons" />
                            </button>
                        </Row>
                        <Row align="center" justify="center" >
                            <button onClick={() => this.handleClickMenu("exercices")}>
                                <img width="70" src={Exercices} alt="Exercices" />
                            </button>
                        </Row>
                        <Row align="center" justify="center" >
                            <button onClick={() => this.handleClickMenu("messages")}>
                                <img width="70" src={Messages } alt="Messages" />
                            </button>
                        </Row>
                    </Col>
                </Row>

            </Container>
        )
    }
    // }
}
