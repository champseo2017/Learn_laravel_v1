import React, { Component } from 'react';

export default class Javascript_l01 extends Component {
    constructor(props) {
        super(props);
        this.state = {
            show: true 
          }
        this.fncAlert = this.fncAlert.bind(this);
      }
      fncAlert() {
        alert('When Click alert input will be Display none');
        this.setState({
            show: this.state.false
        })
      }
    render(){
      
        return (
            <div>
               <input name='btnButton1' type='button' value='Hello' onClick={ this.fncAlert } style={{display: this.state.show ? 'block' : 'none' }}/>
            </div>
        );
    }
}