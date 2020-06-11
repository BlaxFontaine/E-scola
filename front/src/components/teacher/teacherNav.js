import React, {Component} from 'react';
import SideNav, { Toggle, Nav, NavItem, NavIcon, NavText } from '@trendmicro/react-sidenav';
import styled from 'styled-components';

// Be sure to include styles at some point, probably during your bootstraping
import '@trendmicro/react-sidenav/dist/react-sidenav.css';

const Main = styled.main`
    position: relative;
    overflow: hidden;
    transition: all .15s;
    padding: 0 20px;
    margin-left: 64px;
`;

export default class TeacherNav extends Component {
    constructor(props) {
        super(props);
        this.state = {
                        selected: 'students',
                        expanded: false
                    }
        this.onSelect = this.onSelect.bind(this)
    }

    onSelect = (selected) => {
        this.setState({ selected: selected });
    };

    renderContent() {
        const { selected } = this.state;
        return (
            <div>
                <h1>{selected}</h1>  
            </div>
        )
    }

    render() {
        return (
            <div>
                <SideNav onSelect={this.onSelect}>
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
                <Main>
                    {this.renderContent()}
                </Main>
            </div>
        )
    }
}