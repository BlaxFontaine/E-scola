import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Art from '../../../assets/img/png/student/art.png';
import English from '../../../assets/img/png/student/english.png';
import Geometry from '../../../assets/img/png/student/geometry.png';
import Maths from '../../../assets/img/png/student/maths.png';
import Sciences from '../../../assets/img/png/student/sciences.png';
import Write from '../../../assets/img/png/student/write.png';
import { Container, Row, Col } from 'react-grid-system';


export class ExercicesMenu extends Component {

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
                    Mes exercices
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