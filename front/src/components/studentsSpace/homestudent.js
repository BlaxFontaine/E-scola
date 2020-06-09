import React, { Component } from 'react';
import '../../assets/css/studentspace.css';
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
        <Col className="Colleft" width="25%" >col-12 col-sm-6 col-md-8</Col>
        <Col className="Colmain" width="70%" >col-6 col-md-4</Col>
    </Row>
</Container>
            )
        }
    // }
}