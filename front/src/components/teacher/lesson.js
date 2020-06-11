import React, { Component } from 'react';


export default class Student extends Component {
    constructor(props) {
        super(props)
        this.state = {
            lesson: []
        }
        this.onEdit = this.onEdit.bind(this)
    }

    onEdit() {
        console.log(this.state.lesson)
    }

    render() {
        return (
            <tbody>
            <tr>
              <td>{this.props.title}</td>
              <td>{this.props.start_date}</td>
              <td>{this.props.end_date}</td>
            </tr>
            </tbody>
            
        )
    }
}

