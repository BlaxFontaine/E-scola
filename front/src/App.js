import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router } from 'react-router-dom';
import './assets/css/app.css';
import Routes from './Router';
    
ReactDOM.render(<Router><Routes /></Router>, document.getElementById('root'));
