import React, {Component} from 'react';
import SideNav, { Toggle, Nav, NavItem, NavIcon, NavText } from '@trendmicro/react-sidenav';

// Be sure to include styles at some point, probably during your bootstraping
import '@trendmicro/react-sidenav/dist/react-sidenav.css';


export default class TeacherNav extends Component {

    render() {
        return (
            <SideNav
                onSelect={(selected) => {
                    // Add your code here
                }}
            >
                <SideNav.Toggle />
                <SideNav.Nav defaultSelected="students">
                    <NavItem eventKey="students">
                        <NavIcon>
                            <i className="fas fa-users" style={{ fontSize: '1.75em' }} />
                        </NavIcon>
                        <NavText>
                            Classe
                        </NavText>
                    </NavItem>
                    <NavItem eventKey="lessons">
                        <NavIcon>
                            <i className="fas fa-chalkboard-teacher" style={{ fontSize: '1.75em' }} />
                        </NavIcon>
                        <NavText>
                            Leçons
                        </NavText>
                    </NavItem>
                    <NavItem eventKey="assignments">
                        <NavIcon>
                            <i className="fas fa-clipboard-list" style={{ fontSize: '1.75em' }} />
                        </NavIcon>
                        <NavText>
                            Exercices
                        </NavText>
                    </NavItem>
                    <NavItem eventKey="messages">
                        <NavIcon>
                            <i className="fas fa-comments" style={{ fontSize: '1.75em' }} />
                        </NavIcon>
                        <NavText>
                            Messages
                        </NavText>
                    </NavItem>
                </SideNav.Nav>
            </SideNav>
        )
    }
}