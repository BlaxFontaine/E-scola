import React, {Component} from 'react';
import './assets/css/components.css'; 
import Img from './assets/img/png/home/banner.png'
import Student from './assets/img/png/home/student.png'
import Teacher from './assets/img/png/home/teacher.png'
import Parents from './assets/img/png/home/parents.png'
import Login from './assets/img/png/home/login.png'
import Register from './assets/img/png/home/register.png'
import { Container, Row, Col } from 'react-grid-system';


class Home extends Component {

    render() {
        return (
            <Container fluid className="containerLanding">
                <Row justify="center" >
                <img width="500" src={Img} alt="E-schola" />
                </Row>
                <Row justify="center" >
                    <Col xl={12} className="Col1">Apprendre à la maison</Col>   
                </Row>
                <Row>
                <Col xl={12} width={800} className="Colmain">
                    <Col xl={4} className="Col2left">  
                        <Row justify="center">Elève</Row>
                        <Row justify="center"><img width="200" src={Student} alt="student" className ="Img"/></Row>
                        <Row justify="center">
                            <Col xl={3} justify="center" className='LR'><img width="50" src={Login} alt="login"/></Col>    
                        </Row>
                    </Col>
                    <Col xl={4}  className="Col2center">
                        
                        <Row justify="center">Professeur</Row>
                        <Row justify="center"><img width="200" src={Teacher} alt="teacher" className ="Img"/></Row>
                        <Row justify="center">
                            <Col xl={3} justify="center" className='LR'><img width="50" src={Login} alt="login"/></Col>
                            <Col xl={3} justify="center" className='LR'><img width="50" src={Register} alt="register"/></Col>    
                        </Row>
                    </Col>
                    <Col xl={4}  className="Col2right">
                        
                        <Row justify="center">Parent</Row>
                        <Row justify="center"><img width="200" src={Parents} alt="parents" className ="Img"/></Row>
                        <Row justify="center">
                            <Col justify="center" xl={3} className='LR'><img width="50" src={Login} alt="login"/></Col>
                            <Col justify="center" xl={3} className='LR'><img width="50" src={Register} alt="register"/></Col>    
                        </Row>
                    </Col>
                </Col>
                </Row>
            </Container>
        )
    }
}
    
export default Home;