import React, { Component } from 'react';
import axios from 'axios';
import Student from './student';
import { Table } from 'react-bootstrap';
export default class StudentList extends Component {
  constructor(props) {
    super(props)
    this.state = {
      students: [],
      classes: ""
    }
  }

  componentDidMount() {
    axios.get('http://127.0.0.1:8000/api/get/students/list')
    .then((res) => {
      this.setState({
        students: res.data,
        classes: res.data[0]['classe']['name']
      })
      
    })
    .catch(function (err) {
        console.log(err)
    });
  }

  Students() {
    return this.state.students.map((student, index) => {
      return (
        <Student
          firstname={student.firstname}
          lastname={student.lastname}
          key={index}
        />
      )
    })
  }

  render() {
    return (
      <div className="container">
          <h1>{this.state.classes}</h1>
          <Table striped bordered hover variant='secondary'>
          <thead>
          <tr>
          <th>Prénom</th>
          <th>Nom</th>
          </tr>
          </thead>
          {this.Students()}
          </Table>
      </div>
    )
  }
}
