import React, { Component } from 'react';
import '../../assets/css/studentspace.css';
import { LandingStudent } from './pages/landingStudent';
import { Container, Row, Col } from 'react-grid-system';
import axios from 'axios';



export class HomeStudent extends Component {

    constructor(props) {
        super(props)
        this.state = {
            whichSpace: "",
            
        }
    }
 
    // handleClickMenu(which) {
    //     this.setState({
           
    //     })

    // }



    render() {
        // if (this.state.whichSpace === "") {
        return (
            <Container fluid className="containerLanding" width="100%">
                <Row className="ContainerCol" width="200%">
                    <Col className="Colleft" width="15%" >
                        <Row>Avatar</Row>
                        <Row>Nom</Row>
                        <Row>Date
                        </Row>
                        <Row>Météo
                        </Row>
                    </Col>
                    <LandingStudent/>
                    <Col className="Colnav" width="10%" >
             toto
             </Col>
                </Row>

            </Container>
        )
    }
    // }
}