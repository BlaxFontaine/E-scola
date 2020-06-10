import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Art from '../../../assets/img/png/student/art.png';
import English from '../../../assets/img/png/student/english.png';
import Geometry from '../../../assets/img/png/student/geometry.png';
import Maths from '../../../assets/img/png/student/maths.png';
import Sciences from '../../../assets/img/png/student/sciences.png';
import Write from '../../../assets/img/png/student/write.png';
import { LessonsFrench} from './LessonsPages/write';
import { LessonsEnglish} from './LessonsPages/english';
import { LessonsArt} from './LessonsPages/art';
import { LessonsScience} from './LessonsPages/science';
import { LessonsGeometry} from './LessonsPages/geometry';
import { LessonsMath} from './LessonsPages/math';

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
     if (this.state.whichMatiere === "") {
        return (


            <div>

                <Row>
                    Mes leçons
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

                <LessonsFrench/>

            </div>
        )
    }

    else if (this.state.whichMatiere === "english") {
        return (


            <div>

                <LessonsEnglish/>

            </div>
        )
    }

    else if (this.state.whichMatiere === "math") {
        return (


            <div>

                <LessonsMath/>

            </div>
        )
    }
    else if (this.state.whichMatiere === "science") {
        return (


            <div>

                <LessonsScience/>

            </div>
        )
    }
    else if (this.state.whichMatiere === "geometry") {
        return (


            <div>

                <LessonsGeometry/>

            </div>
        )
    }
    else if (this.state.whichMatiere === "art") {
        return (


            <div>

                <LessonsArt/>

            </div>
        )
    }
     }
}