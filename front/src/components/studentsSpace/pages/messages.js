import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Art from '../../../assets/img/png/student/art.png';
import English from '../../../assets/img/png/student/english.png';
import Geometry from '../../../assets/img/png/student/geometry.png';
import Maths from '../../../assets/img/png/student/maths.png';
import Sciences from '../../../assets/img/png/student/sciences.png';
import Write from '../../../assets/img/png/student/write.png';
import { Container, Row, Col } from 'react-grid-system';


export class MessagesList extends Component {

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

<div>
                <Row>
                    Mes messages
                    </Row>
                <Row>
                    <button >
                        Message 1
                </button>
                </Row>
                <Row>
                    <button >
                        Message 2
                         </button>
                </Row>
                <Row>
                    <button >
                        Message 3
                        </button>
                </Row>
                <Row>
                    <button >
                        Message 4
                        </button>
                </Row>
                <Row>
                    <button >
                        Message 5
                        </button>
                </Row>
                <Row>
                    <button >
                        Message 6
                        </button>
                </Row>
                </div>

        )
    }
    // }
}