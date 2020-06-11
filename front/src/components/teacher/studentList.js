import React, { Component } from 'react';
import axios from 'axios';
import Student from './student';

export default class StudentList extends Component {
  constructor(props) {
    super(props)
    this.state = {
      students: [{firstname: "Beyoncé", lastname: "Knowles"}, {firstname: "Aya", lastname: "Nakamura"}]
    }
  }

  // componentDidMount() {
  //   axios.get('http://127.0.0.1:8000/api/get/classe/{id}/students/')
  //   .then((res) => {
  //     this.setState({
  //       students: res.data
  //     })
  //   })
  //   .catch(function (err) {
  //       console.log(err)
  //   });
  // }

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
          <h1>Classe</h1>
          {this.Students()}
      </div>
    )
  }
}
