import React, { Component } from 'react';
import { Card, Button, Accordion } from 'react-bootstrap';

export default class Message extends Component {
    constructor(props) {
        super(props)
        this.state = {
            message: []
        }
    }

    render() {
        return (
            <Accordion defaultActiveKey="0">
                <Card>
                    <Card.Header>
                    <Accordion.Toggle as={Button} variant="link" eventKey="0">
                        <strong>De: </strong>{this.props.sender}
                        <strong>        Object: </strong>{this.props.object}
                    </Accordion.Toggle>
                    </Card.Header>
                    <Accordion.Collapse eventKey="0">
                    <Card.Body>{this.props.content}</Card.Body>
                    </Accordion.Collapse>
                </Card>
            </Accordion>
        )
    }
}

