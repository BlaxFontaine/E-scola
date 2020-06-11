import React, { Component } from 'react';
import '../../../assets/css/studentspace.css';
import Message1 from '../../../assets/img/png/student/exProto1.png';
import Message2 from '../../../assets/img/png/student/exProto2.png';
import Message3 from '../../../assets/img/png/student/exProto3.png';
import Message4 from '../../../assets/img/png/student/exProto4.png';
import Message5 from '../../../assets/img/png/student/exProto5.png';
import Message6 from '../../../assets/img/png/student/exProto6.png';
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
                    <button>
                        <img width="600" src={Message1} alt="Message 1" />
                    </button>
                </Row>
                <Row>
                <button>
                        <img width="600" src={Message2} alt="Message 2" />
                    </button>
                </Row>
                <Row>
                <button>
                        <img width="600" src={Message3} alt="Message 3" />
                    </button>
                </Row>
                <Row>
                <button>
                        <img width="600" src={Message4} alt="Message 4" />
                    </button>
                </Row>
                <Row>
                <button>
                        <img width="600" src={Message5} alt="Message 5" />
                    </button>
                </Row>
                <Row>
                <button>
                        <img width="600" src={Message1} alt="Message 6" />
                    </button>
                </Row>
            </div>

        )
    }
    // }
}