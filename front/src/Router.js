import React, { Component } from "react";
import { Route, Switch, Redirect } from "react-router-dom";
//import { error404 } from "./components/404/404.js";
import testGetDataFromBack  from "./testGetDataBack.js";
import Home from './home';
//import { PrivateRoute } from "./components/PrivateRoute.js";

class Routes extends Component {
    render() {
        return (

            <div>

                <Switch>
                    <Route path="/home" component={Home} />
                    <Route path="/testData" component={testGetDataFromBack} />
                    <Redirect to="/home" />

                </Switch>
            </div>

        );
    }
}
export default Routes;