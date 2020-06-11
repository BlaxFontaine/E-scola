import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Logout from '../../../assets/img/png/student/logout.png';
import Lessons from '../../../assets/img/png/student/Lessons.png';
import Exercices from '../../../assets/img/png/student/exercices.png';
import messages from '../../../assets/img/png/student/maths.png';
import { Container, Row, Col } from 'react-grid-system';


export class NavSide extends Component {

    constructor(props) {
        super(props)
        this.state = {
            wantBackHome: "false",
        }
    }

    handleClickNav(where) {
        this.setState({
            whichPage: where
        })

    }

    



    render() {
        // if (this.state.whichSpace === "") {
        return (


            <div>

                <Row>
                    Mes leçons
                   </Row>
                <Row>
                    <Col>
                        <button >
                            <img width="60" src={Write} alt="Ecriture" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="60" src={Maths} alt="Maths" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="60" src={Geometry} alt="Géométrie" />
                        </button>
                    </Col>
                </Row>
                <Row>
                    <Col>
                        <button >
                            <img width="60" src={Art} alt="Arts" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="60" src={English} alt="Anglais" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="60" src={Sciences} alt="Sciences" />
                        </button>
                    </Col>
                </Row>

            </div>
        )
    }
    // }
}