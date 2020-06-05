import React from "react";
import { Button, Card, FormGroup, Form, Col, FormControl, FormLabel } from "react-bootstrap";
import axios from 'axios';

 class TestRegist extends React.Component {
    state = {
        firstname: "",
        lastname: "",
        email: "",
        password: "",
        cpassword: "",
        erroremail: "",
        errorfirst: "",
        errorlast: "",
        errorpassword: "",
        errorcpassword: ""
    };

    handleSubmit = event => {
        event.preventDefault();
        const user = {
            firstname: this.state.firstname
        }
        axios.post(`https://127.0.0.1:8000/api/post/mascot/`, { user })
            .then(res => {
                console.log(res);
                console.log(res.data)
            })
    }
    handleChange = (event) => {
        this.setState({
            firstname: event.target.value
        });
    };
    send = async () => {
        const { firstname, lastname, email, password, cpassword } = this.state;
        this.setState({
            erroremail: "",
            errorfirst: "",
            errorlast: "",
            errorpassword: "",
            errorcpassword: ""
        });
        let haserror = false;
        var reg = new RegExp(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
        if (!firstname || firstname.length === 0) {
            this.setState({ errorfirst: " Veuillez entrer un nom" })
            haserror = true;
        }
        else if (firstname.length < 2) {
            this.setState({ errorfirst: " Votre nom doit avoir au moins 2 caracteres" })
            haserror = true;
        }
        if (!email || email.length === 0) {
            this.setState({ erroremail: " Veuillez entrer un email" })
            haserror = true;
        }

        if (!lastname || lastname.length === 0) {
            this.setState({ errorlast: " Veuillez entrer un prénom" })
            haserror = true;
        }
        else if (lastname.length < 2) {
            this.setState({ errorlast: " Votre prénom doit avoir au moins 2 caracteres" })
            haserror = true;
        }
        if (!password || password.length === 0) {
            this.setState({ errorpassword: " Veuillez entrer un mot de passe" })
            haserror = true;
        }
        else if (password.length < 8) {
            this.setState({ errorpassword: " Votre mot de passe doit avoir au moins 8 caracteres" })
            haserror = true;
        }
        if (!cpassword || cpassword.length === 0) {
            this.setState({ errorcpassword: " Veuillez confirmer le password" })
            haserror = true;
        }
        else if (cpassword != password) {
            this.setState({ errorcpassword: " Les mots de passe ne correspondent pas" })
            haserror = true;
        }

        // if (!haserror){
        // try {
        // const { data } = await API.signup({ firstname, lastname, email, password });
        // localStorage.setItem("token", data.token);
        // window.location = "/dashboard";
        // } catch (error) {
        // console.error(error.response);
        // this.setState({ error: error.response.data.text }); //on défini une propriété et error vaut donc ce qu'il y a derriere les deux points

        // }
    }
        ;
    // }
    // handleChange = (event) => {
    // this.setState({
    // [event.target.id]: event.target.value
    // });
    //};
    render() {
        const { firstname,
            lastname,
            email,
            password,
            cpassword,
            error,
            erroremail,
            errorfirst,
            errorlast,
            errorpassword,
            errorcpassword } = this.state;
        return (
            <div className="bgr">
                <div className="Signup">
                    {error}
                    <Card className="CardS">

                        <Form>
                            <Form.Row>
                                <Form.Group as={Col} controlId="firstname">
                                    <Form.Label>Firstname</Form.Label>
                                    <i className="error">
                                        {errorfirst}
                                    </i>
                                    <Form.Control
                                        autoFocus
                                        //value={firstname}
                                        onChange={this.handleChange}
                                        type="text"
                                        placeholder="Firstname" />
                                </Form.Group>
                                <Form.Group as={Col} controlId="lastname">
                                    <Form.Label>Lastname</Form.Label>
                                    <i className="error">
                                        {errorlast}
                                    </i>
                                    <Form.Control
                                        autoFocus
                                        type="text"
                                        // value={lastname}
                                        onChange={this.handleChange}
                                    />
                                </Form.Group>
                            </Form.Row>

                            <Form.Row>
                                <Form.Group as={Col} controlId="email">

                                    <Form.Label>Email </Form.Label>
                                    <Form.Control
                                        autoFocus
                                        type="text"
                                        //value={email}
                                        onChange={this.handleChange} placeholder="Enter your email" />
                                </Form.Group>

                            </Form.Row>

                            <Form.Row>
                                <Form.Group as={Col} controlId="password">
                                    <Form.Label>Password</Form.Label>
                                    <i className="error">
                                        {errorpassword}
                                    </i>
                                    <Form.Control
                                        //value={password}
                                        onChange={this.handleChange}
                                        type="password" placeholder="Password" />
                                </Form.Group>
                                <Form.Group as={Col} controlId="cpassword">
                                    <Form.Label>Confirmation</Form.Label>
                                    <i className="error">
                                        {errorcpassword}
                                    </i>
                                    <Form.Control
                                        value={cpassword}
                                        onChange={this.handleChange}
                                        type="password" placeholder="Confirm your password" />
                                </Form.Group>
                            </Form.Row>

                        </Form>
                        <div align="center">
                            <div className="error">{error}</div>

                            <button className="btn btn-light-outline btn-sm" onClick={this.handleSubmit} type="submit">

                            </button>
                        </div>
                    </Card>
                </div>
            </div>
        );
    }
}

export default TestRegist;