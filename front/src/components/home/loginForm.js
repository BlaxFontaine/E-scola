import React from "react";
import Login from '../../assets/img/png/home/login.png'
import { Card,Button, FormGroup, FormControl, FormLabel } from "react-bootstrap";


export class LoginForm extends React.Component {
  state = {
    email: "",
    password: "",
    erroremail:"",
    errorpassword: ""
  };
  
  handleChange = (event) => {
    this.setState({
      [event.target.id]: event.target.value
    });
  };
  send = async () => {
    const { email, password, erroremail,errorpassword } = this.state;
    
    this.setState({
      email,
    password,

      erroremail,
    errorpassword,
    });
    let haserror = false;
    var reg=new RegExp( /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
    
    if (!email || email.length === 0) {
      this.setState({ erroremail: "    Veuillez entrer un email" })
      haserror = true;
    }
    else if(!reg.test(email)) {
      this.setState({ erroremail: "   Veuillez entrer un email valide" })
      haserror=true;
    }
    
    if (!password || password.length === 0) {
      this.setState({ errorpassword: "    Veuillez entrer un mot de passe" })
      haserror=true;
    }
    else if (password.length < 8 ) {
      this.setState({ errorpassword: "   Votre mot de passe doit avoir au moins 8 caracteres" })
      haserror=true;
    }
  };
  
  render() {
    const { erroremail, errorpassword, password  } = this.state;
    return (
      <div className="Login">
        <Card className="CardL">
        <FormGroup controlId="email" bsSize="large">
          <FormLabel>E-mail</FormLabel>
        <i className="error" >
        {erroremail}
                  </i>
          <FormControl
          
            autoFocus
            type="email"
           //value={email}
           placeholder="Entrez votre e-mail"
            onChange={this.handleChange}
          />
        </FormGroup>
        <FormGroup controlId="password" bsSize="large">
          <FormLabel>Mot de passe</FormLabel>
        <i className="error" >
        {errorpassword}
                  </i>
          <FormControl
            //value={password}
            onChange={this.handleChange}
            type="password"
            placeholder="Entrez votre mot de passe"
          />
        </FormGroup>
        <div className="error"></div>
        <div align="center">

        <button className="btn btn-light-outline btn-sm" onClick={this.send}   type="submit">
        <img width="50" src={Login} alt="loginButton"/>
        </button>
        </div>
        </Card>
      </div>




    );
  }
}
