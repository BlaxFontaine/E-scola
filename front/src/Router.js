import React, { Component } from "react";
import { Route, Switch, Redirect } from "react-router-dom";
//import { error404 } from "./components/404/404.js";
import testGetDataFromBack  from "./testGetDataBack.js";
import Home from './home';
import {HomeStudent} from './components/studentsSpace/homestudent.js'
import Test from './components/test'
import TestRegist from './components/testRegist'

//import { PrivateRoute } from "./components/PrivateRoute.js";

class Routes extends Component {
    render() {
        return (

            <div>

                <Switch>
                    <Route path="/home" component={Home} />
                    <Route path="/homestudent" component={HomeStudent} />
                    <Route path="/testData" component={testGetDataFromBack} />
                    <Route path="/test" component={Test} />
                    <Route path="/testregist" component={TestRegist} />
                    <Redirect to="/home" />

                </Switch>
            </div>

        );
    }
}
export default Routes;