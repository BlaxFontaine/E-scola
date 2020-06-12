import React, { Component } from 'react';
import {Card} from 'react-bootstrap'
import Lesson1 from '../../assets/img/png/teacher/materials/unnamed.png'
import Lesson2 from '../../assets/img/png/teacher/materials/unnamed2.png'
import Lesson3 from '../../assets/img/png/teacher/materials/unnamed3.png'
import {Container,Row,Col} from 'react-grid-system'
export default class Lesson extends Component {
    
    render() {
        return (
            <Container >
            <br/>
            <br/>
            <Row>
            <Col xl={4}>
            <Card style={{ width: '20rem' }}>
            <Card.Img variant="top" src={Lesson1} width={300} />
            <Card.Body>
              <Card.Title>Le son m</Card.Title>
              <Card.Text>
                Leçon 1
              </Card.Text>
            </Card.Body>
          </Card>
          </Col>
          <Col xl={4}>
          <Card style={{ width: '20rem' }}>
            <Card.Img variant="top" src={Lesson2} width={300} />
            <Card.Body>
              <Card.Title>Le son m</Card.Title>
              <Card.Text>
                Leçon 2
              </Card.Text>
            </Card.Body>
          </Card>
          </Col>
          <Col xl={4}>
          <Card style={{ width: '20rem' }}>
            <Card.Img variant="top" src={Lesson3} width={300} />
            <Card.Body>
              <Card.Title>Le son m</Card.Title>
              <Card.Text>
                Leçon 3
              </Card.Text>
            </Card.Body>
          </Card>
          </Col>
          </Row>
          </Container>
            
            
        )
    }
}

