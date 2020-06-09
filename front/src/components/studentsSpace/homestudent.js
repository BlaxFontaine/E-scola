import React, { Component } from 'react';
import '../../assets/css/studentspace.css';
import { LandingStudent } from './pages/landingStudent';
import { Container, Row, Col } from 'react-grid-system';


export class HomeStudent extends Component {

    // constructor(props) {
    //     super(props)
    //     this.state = {
    //         whichSpace: "",
    //     }
    // }

    // handleClickMenu(which) {
    //     this.setState({
    //         whichSpace: which
    //     })

    // }



    render() {
        // if (this.state.whichSpace === "") {
        return (
            <Container fluid className="containerLanding">
                <Row className="ContainerCol">
                    <Col className="Colleft" width="25%" >
                        <Row>Avatar</Row>
                        <Row>Nom</Row>
                        <Row>Date</Row>
                        <Row>Météo</Row>
                    </Col>
                    <LandingStudent/>
                </Row>
            </Container>
        )
    }
    // }
}