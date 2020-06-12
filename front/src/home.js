import React, { Component } from 'react';
import './assets/css/components.css';
import Img from './assets/img/png/home/banner.png'
import Footer from './assets/img/png/home/footer.png'
import Student from './assets/img/png/home/hedgehog.png'
import Teacher from './assets/img/png/home/giraffe.png'
import Parents from './assets/img/png/home/lama.png'
import Login from './assets/img/png/home/login.png'
import Register from './assets/img/png/home/register.png'
import { LoginForm } from './components/home/loginForm'
import { RegisterForm } from './components/home/registerForm'
import { Container, Row, Col } from 'react-grid-system';


class Home extends Component {

    constructor(props) {
        super(props)//appel de props
        this.state = {
            whoAmI: "",
            wantBackHome:false

        }
        // this.UserEntry = this.UserEntry.bind(this) //test est le nom de la fonction
    }

    handleClickLogin(who) {
        this.setState({
            whoAmI: who
        })

    }
    handleClickRegister(who) {
        this.setState({
            whoAmI: who
        })

    }


    render() {
        if (this.state.whoAmI === "") {
            return (
                <Container fluid className="containerLanding">
                    <Row justify="center" >
                        <img width="500" src={Img} alt="E-schola" />
                    </Row>
                    <Row justify="center" >
                        <Col xl={12} className="Col1">Apprendre à la maison</Col>
                    </Row>
                    <Row>
                        <Col xl={12} width={800} className="ColmainHome">
                            <Col xl={4} className="Col2left">
                                <Row justify="center">Elève</Row>
                                <Row justify="center">
                                    <img width="200" src={Student} alt="student" className="Img"  />
                                </Row>
                                <Row justify="center">
                                    <Col xl={3} justify="center" className='LR'>
                                        <button onClick={() => this.handleClickLogin("studentLogin")}>
                                            <img width="50" src={Login} alt="login" />
                                        </button>
                                    </Col>
                                </Row>
                            </Col>
                            <Col xl={4} className="Col2center">

                                <Row justify="center">Professeur</Row>
                                <Row justify="center"><img width="200" src={Teacher} alt="teacher" className="Img" /></Row>
                                <Row justify="center">
                                    <Col xl={3} justify="center" className='LR'>
                                        <button onClick={() => this.handleClickLogin("teacherLogin")}>
                                            <img width="50" src={Login} alt="login" />
                                        </button>

                                    </Col>
                                    <Col xl={3} justify="center" className='LR'>
                                        <button onClick={() => this.handleClickRegister("teacherRegister")}>
                                            <img width="50" src={Register} alt="register" />
                                        </button>
                                    </Col>
                                </Row>
                            </Col>
                            <Col xl={4} className="Col2right">

                                <Row justify="center">Parent</Row>
                                <Row justify="center"><img width="200" src={Parents} alt="parents" className="Img" /></Row>
                                <Row justify="center">
                                    <Col justify="center" xl={3} className='LR'>
                                        <button onClick={() => this.handleClickLogin("parentsLogin")}>
                                            <img width="50" src={Login} alt="login" />
                                        </button>
                                    </Col>
                                    <Col justify="center" xl={3} className='LR'>
                                        <button onClick={() => this.handleClickRegister("parentsRegister")}>
                                            <img width="50" src={Register} alt="register" />
                                        </button>
                                    </Col>
                                </Row>
                            </Col>
                        </Col>
                    </Row>
                    <Row >
                    <img src={Footer} width="100%" height="150" />
                    </Row>

                </Container>
            )
        }
        else if (this.state.whoAmI === "studentLogin") {
            return (
                <Container fluid className="containerLanding">
                    <Row justify="center" >
                        <img width="500" src={Img} alt="E-schola" />
                    </Row>
                    <Row justify="center" >
                        <Col xl={12} className="Col1">Je me connecte à mon compte élève</Col>
                    </Row>
                    <Row>
                        <Col xl={12} width={800} className="Colmain">
                            <Col xl={4} className="Col2left">
                            <button onClick={() => this.handleClickLogin("")}>
                                    Retour
                                </button>

                            </Col>
                            <Col xl={4} className="Col2center">

                                <Row justify="center">Connexion</Row>
                                <div><LoginForm /></div>
                            </Col>
                            <Col xl={4} className="Col2right">


                            </Col>
                        </Col>
                    </Row>
                    <Row >
                    <img src={Footer} width="100%" height="150" />
                    </Row>
                </Container>

            )
        }
        else if (this.state.whoAmI === "teacherLogin") {
            return (
                <Container fluid className="containerLanding">
                    <Row justify="center" >
                        <img width="500" src={Img} alt="E-schola" />
                    </Row>
                    <Row justify="center" >
                        <Col xl={12} className="Col1">Je me connecte à mon compte Prof</Col>
                    </Row>
                    <Row>       
                        <Col xl={12} width={800} className="Colmain">
                            <Col xl={4} className="Col2left">
                            <button onClick={() => this.handleClickLogin("")}>
                                    Accueil
                                </button>
                            </Col>
                            <Col xl={4} className="Col2center">

                                <Row justify="center">Connexion</Row>
                                <div><LoginForm /></div>
                            </Col>
                            <Col xl={4} className="Col2right">
                                <button onClick={() => this.handleClickRegister("teacherRegister")}>
                                    pas encore inscrit?
                                </button>
                            </Col>
                        </Col>
                    </Row>
                    <Row >
                    <img src={Footer} width="100%" height="150" />
                    </Row>
                </Container>
            )
        }
        else if (this.state.whoAmI === "parentsLogin") {
            return (
                <div><Container fluid className="containerLanding">
                    <Row justify="center" >
                        <img width="500" src={Img} alt="E-schola" />
                    </Row>
                    <Row justify="center" >
                        <Col xl={12} className="Col1">Je me connecte à mon compte parent</Col>
                    </Row>
                    <Row>
                        <Col xl={12} width={800} className="Colmain">
                            <Col xl={4} className="Col2left">
                            <button onClick={() => this.handleClickLogin("")}>
                                    Accueil
                                </button>
                            </Col>
                            <Col xl={4} className="Col2center">

                                <Row justify="center">Connexion</Row>
                                <div><LoginForm /></div>
                            </Col>
                            <Col xl={4} className="Col2right">
                            <button onClick={() => this.handleClickRegister("parentsRegister")}>
                                    pas encore inscrit?
                                </button>
                            </Col>
                        </Col>
                    </Row>
                    <Row >
                    <img src={Footer} width="100%" height="150" />
                    </Row>
                </Container></div>
            )
        }


        else if (this.state.whoAmI === "teacherRegister") {
            return (
                <Container fluid className="containerLanding">
                    <Row justify="center" >
                        <img width="500" src={Img} alt="E-schola" />
                    </Row>
                    <Row justify="center" >
                        <Col xl={12} className="Col1">Je crée mon compte Prof</Col>
                    </Row>
                    <Row>
                        <Col xl={12} width={800} className="Colmain">
                            <Col xl={4} className="Col2left">
                            <button onClick={() => this.handleClickLogin("")}>
                                    Accueil
                                </button>
                            </Col>
                            <Col xl={4} className="Col2center">

                                <Row justify="center">S'inscrire</Row>
                                <div><RegisterForm /></div>
                            </Col>
                            <Col xl={4} className="Col2right">
                            <button onClick={() => this.handleClickLogin("teacherLogin")}>
                                    Déjà inscrit?
                                </button>

                            </Col>
                        </Col>
                    </Row>
                    <Row >
                    <img src={Footer} width="100%" height="150" />
                    </Row>
                </Container>
            )
        }
        else if (this.state.whoAmI === "parentsRegister") {
            return (
                <div><Container fluid className="containerLanding">
                    <Row justify="center" >
                        <img width="500" src={Img} alt="E-schola" />
                    </Row>
                    <Row justify="center" >
                        <Col xl={12} className="Col1">Je crée mon compte parent</Col>
                    </Row>
                    <Row>
                        <Col xl={12} width={800} className="Colmain">
                            <Col xl={4} className="Col2left">
                            <button onClick={() => this.handleClickLogin("")}>
                                    Accueil
                                </button>
                            </Col>
                            <Col xl={4} className="Col2center">

                                <Row justify="center">S'inscrire</Row>
                                <div><RegisterForm /></div>
                            </Col>
                            <Col xl={4} className="Col2right">
                            <button onClick={() => this.handleClickLogin("parentsLogin")}>
                                    Déjà inscrit?
                                </button>
                            </Col>
                        </Col>
                    </Row>
                    <Row >
                    <img src={Footer} width="100%" height="150" />
                    </Row>
                </Container></div>
            )
        }
    }
}


export default Home;