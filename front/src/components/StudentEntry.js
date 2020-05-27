// ./assets/js/components/Home.js

import React, { Component } from 'react';


export class StudentEntry extends Component {

    constructor(props) {
        super(props)//appel de props
        this.state = {
            whoAmI : "student"
        }
        this.StudentEntry = this.StudentEntry.bind(this) //test est le nom de la fonction
    }
    
    StudentEntry() {
        if (this.state.whoAmI === "student") {
            return (<div>coucou i'm student</div>)
        }
        else {
            return (<div>coucou i'm student</div>)
        }
    }
    
    render() {

        console.log('test');
        return (
            <div>
                {this.StudentEntry()}
            </div>
        )
    }
}

