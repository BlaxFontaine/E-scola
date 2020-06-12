import React, { Component } from 'react';
import '../../../../assets/css/studentspace.css';
// import { Container, Row, Col } from 'react-grid-system';
import { Container, Row, Col, Image} from 'react-bootstrap';
import Math from '../../../../assets/img/jpg/math.jpg';

export class LessonsMath extends Component {

    constructor(props) {
        super(props)
        this.state = {
            whichMatiere: "",
        }
    }

    handleClickMatiere(which) {
        this.setState({
            whichMatiere: which
        })

    }



    render() {
        // if (this.state.whichSpace === "") {
        return (


            <Container>

                <Row>
                    Leçon Maths n°1
                </Row>
                <Row>
                    <Image src={Math} rounded />
                </Row>
            </Container>
        )
    }
    // }
}