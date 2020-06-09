import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Art from '../../../assets/img/png/student/art.png';
import English from '../../../assets/img/png/student/english.png';
import Geometry from '../../../assets/img/png/student/geometry.png';
import Maths from '../../../assets/img/png/student/maths.png';
import Sciences from '../../../assets/img/png/student/sciences.png';
import Write from '../../../assets/img/png/student/write.png';
import { Container, Row, Col } from 'react-grid-system';


export class LessonsMenu extends Component {

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


            <div>

                <Row>
                    Mes leçons
                   </Row>
                <Row>
                    <Col>
                        <button >
                            <img width="100" src={Write} alt="Ecriture" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="100" src={Maths} alt="Maths" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="100" src={Geometry} alt="Géométrie" />
                        </button>
                    </Col>
                </Row>
                <Row>
                    <Col>
                        <button >
                            <img width="100" src={Art} alt="Arts" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="100" src={English} alt="Anglais" />
                        </button>
                    </Col>
                    <Col>
                        <button >
                            <img width="100" src={Sciences} alt="Sciences" />
                        </button>
                    </Col>
                </Row>

            </div>
        )
    }
    // }
}