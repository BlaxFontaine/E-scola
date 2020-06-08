import React from "react";
import { Button, Card, FormGroup, Form, Col, FormControl, FormLabel } from "react-bootstrap";
import axios from 'axios';

 class TestRegist extends React.Component {
    state = {
        staate: "",
        sentence: "",
        img: "",
    };

    handleSubmit = event => {
        event.preventDefault();
        const mascot = {
            staate: this.state.staate,
            sentence: this.state.sentence,
            img: this.state.img
        };
        axios.post(`http://127.0.0.1:8000/api/post/mascot`, { mascot });            
    }
    handleChange1 = (event) => {
        this.setState({
            staate: event.target.value
        });
    };
    handleChange2 = (event) => {
        this.setState({
            sentence: event.target.value
        });
    };
    handleChange3 = (event) => {
        this.setState({
            img: event.target.value
        });
    };

    send = async () => {
        const { staate, sentence, img } = this.state;

      
    };

    render() {
        const { staate,
            sentence,
            img,
            } = this.state;
        return (
            <div className="bgr">
                <div className="Signup">
                    <Card className="CardS">

                        <Form>
                            <Form.Row>
                                <Form.Group as={Col} controlId="staate">
                                    <Form.Label>Staate</Form.Label>

                                    <Form.Control
                                        autoFocus
                                        //value={firstname}
                                        onChange={this.handleChange1}
                                        type="text"
                                        placeholder="staate" />
                                </Form.Group>
                                <Form.Group as={Col} controlId="sentence">
                                    <Form.Label>sentence</Form.Label>
                                    <Form.Control
                                        autoFocus
                                        type="text"
                                        // value={lastname}
                                        onChange={this.handleChange2}
                                    />
                                </Form.Group>
                                <Form.Group as={Col} controlId="img">
                                    <Form.Label>img</Form.Label>
                                    <Form.Control
                                        autoFocus
                                        type="text"
                                        // value={lastname}
                                        onChange={this.handleChange3}
                                    />
                                </Form.Group>
                            </Form.Row>


                        </Form>
                        <div align="center">
                            <button className="btn btn-light-outline btn-sm" onClick={this.handleSubmit} type="submit">
                            <p>clikc !</p>
                            </button>
                        </div>
                    </Card>
                </div>
            </div>
        );
    }
}

export default TestRegist;