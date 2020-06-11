import React, { Component } from 'react';
import '../../../../assets/css/studentspace.css';
import { Container, Row, Col } from 'react-grid-system';


export class ExercicesGeometry extends Component {

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
        // if (this.state.whichSpace === "") {
        return (


            <div>

                <Row>
                    Page d'exercices géométrie
                   </Row>
                

            </div>
        )
    }
    // }
}