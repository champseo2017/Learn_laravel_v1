import React, { Component } from 'react';

export default class Header extends Component {
    render(){

        let { currentUser, isLoggedIn } = this.props
        currentUser = "Logged in as" + currentUser

        return (
            <div>
                <h1>Component: Header { isLoggedIn && currentUser }</h1>
            </div>
        );
    }
}