import React, { Component } from 'react';
import {Card} from 'react-bootstrap'
import Exo1 from '../../assets/img/png/teacher/materials/exo.png'
import {Container,Row,Col} from 'react-grid-system'
export default class Lesson extends Component {
    
    render() {
        return (
            <Container >
            <br/>
            <br/>
            <Card style={{ width: '20rem' }}>
            <Card.Img variant="top" src={Exo1} width={300} />
            <Card.Body>
              <Card.Title>Le son m</Card.Title>
              <Card.Text>
                exercice 1
              </Card.Text>
            </Card.Body>
          </Card>
          </Container>
            
            
        )
    }
}

