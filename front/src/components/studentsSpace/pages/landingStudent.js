import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Lessons from '../../../assets/img/png/student/lessons.png';
import Exercices from '../../../assets/img/png/student/exercices.png';
import Messages from '../../../assets/img/png/student/messages.png';
import { LessonsMenu } from './lessonsMenu';
import { ExercicesMenu } from './exercicesMenu';
import { MessagesList } from './messages';

import { Container, Row, Col } from 'react-grid-system';


export class LandingStudent extends Component {

    constructor(props) {
        super(props);
        this.state = {
            whichMenu: "",
        }
    }

    handleClickMenu(which) {
        this.setState({
            whichMenu: which
        })

    }
    setMenu(which) {
        this.setState({
            whichMenu: which
        })
    }


    render() {
        if (this.state.whichMenu === "") {
            return (

                <Col className="Colmain" width="70%" >
                    <div>
                        <Row style={{ justifyContent: 'space-around' }}>
                            <Col>
                                <button onClick={() => this.handleClickMenu("lessons")}>
                                    <img width="150" src={Lessons} alt="Leçons" />
                                </button>
                            </Col>
                            <Col>
                                <button onClick={() => this.handleClickMenu("exercices")}>
                                    <img width="150" src={Exercices} alt="Exercices" />
                                </button>
                            </Col>
                        </Row>
                        <Row style={{ justifyContent: 'space-around' }}>
                            <button onClick={() => this.handleClickMenu("messages")}>
                                <img width="150" src={Messages} alt="Messages" />
                            </button>
                        </Row>

                    </div>
                </Col>



            )
        }
        else if (this.state.whichMenu === "lessons") {
            return (
                <Col className="Colmain" width="70%" >
                    <LessonsMenu />

                </Col>

            )

        }
        else if (this.state.whichMenu === "exercices") {
            return (
                <Col className="Colmain" width="70%" >
                    <ExercicesMenu />
                </Col>
            )

        }
        else if (this.state.whichMenu === "messages") {
            return (
                <Col className="Colmain" width="70%" >
                    <MessagesList />
                </Col>
            )

        }
    }
}