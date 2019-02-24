import React, { Component } from 'react';

export default class Footer extends Component {
    constructor(props){
        super(props)
        this.state = {
            time: 0
        }
        setInterval(()=>{

            this.setState({
                time: this.state.time +1
            })

        },1000);
    }
    render(){
        let {time} = this.state
        return (
            <div>
                <h1> Footer Online Time {time} </h1>
            </div>
        );
    }
}