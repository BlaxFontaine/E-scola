import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Art from '../../../assets/img/png/student/art.png';
import English from '../../../assets/img/png/student/english.png';
import Geometry from '../../../assets/img/png/student/geometry.png';
import Maths from '../../../assets/img/png/student/maths.png';
import Sciences from '../../../assets/img/png/student/sciences.png';
import Write from '../../../assets/img/png/student/write.png';
import { ExercicesFrench} from './ExercicesPages/write';
import { ExercicesEnglish} from './ExercicesPages/english';
import { ExercicesArt} from './ExercicesPages/art';
import { ExercicesScience} from './ExercicesPages/science';
import { ExercicesGeometry} from './ExercicesPages/geometry';
import { ExercicesMath} from './ExercicesPages/math';

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
     if (this.state.whichMatiere === "") {
        return (


            <div>

                <Row>
                    Mes Exercices
                   </Row>
                <Row>
                    <Col>
                        <button onClick={() => this.handleClickMatiere("write")} >
                            <img width="120" src={Write} alt="Ecriture"  />
                        </button>
                    </Col>
                    <Col>
                    <button onClick={() => this.handleClickMatiere("math")} >
                            <img width="120" src={Maths} alt="Maths" />
                        </button>
                    </Col>
                    <Col>
                    <button onClick={() => this.handleClickMatiere("geometry")} >
                            <img width="120" src={Geometry} alt="Géométrie" />
                        </button>
                    </Col>
                </Row>
                <Row>
                    <Col>
                    <button onClick={() => this.handleClickMatiere("art")} >
                            <img width="120" src={Art} alt="Arts" />
                        </button>
                    </Col>
                    <Col>
                    <button onClick={() => this.handleClickMatiere("english")} >
                            <img width="120" src={English} alt="Anglais" />
                        </button>
                    </Col>
                    <Col>
                    <button onClick={() => this.handleClickMatiere("science")} >
                            <img width="120" src={Sciences} alt="Sciences" />
                        </button>
                    </Col>
                </Row>

            </div>
        )
    }

    else if (this.state.whichMatiere === "write") {
        return (


            <div>

                <ExercicesFrench/>

            </div>
        )
    }

    else if (this.state.whichMatiere === "english") {
        return (


            <div>

                <ExercicesEnglish/>

            </div>
        )
    }

    else if (this.state.whichMatiere === "math") {
        return (


            <div>

                <ExercicesMath/>

            </div>
        )
    }
    else if (this.state.whichMatiere === "science") {
        return (


            <div>

                <ExercicesScience/>

            </div>
        )
    }
    else if (this.state.whichMatiere === "geometry") {
        return (


            <div>

                <ExercicesGeometry/>

            </div>
        )
    }
    else if (this.state.whichMatiere === "art") {
        return (


            <div>

                <ExercicesArt/>

            </div>
        )
    }
     }
}