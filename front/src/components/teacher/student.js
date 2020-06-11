import React, { Component } from 'react';
import axios from 'axios';
import { Card, Button } from 'react-bootstrap';

export default class Student extends Component {
    constructor(props) {
        super(props)
        this.state = {
            student: []
        }
        this.onEdit = this.onEdit.bind(this)
    }

    onEdit() {
        console.log(this.state.student)
    }

    render() {
        return (
            <Card>
                <Card.Body>
                    <Card.Title>{this.props.firstname} {this.props.lastname}</Card.Title>
                    <Button variant="primary" onClick={this.onEdit}><i className="fab fa-qq"></i>   Edit</Button>
                </Card.Body>
            </Card>
        )
    }
}

