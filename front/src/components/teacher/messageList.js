import React, { Component } from 'react';
import axios from 'axios';
import Message from './message';

export default class MessageList extends Component {
  constructor(props) {
    super(props)
    this.state = {
      messages: [{sender: "Marie", receiver: "Aya", object: "Absence", content: "Bonjour Mme Lovelace. Ce message pour vous informer que la petite Emilie sera absente aujourd'hui, elle a une grosse gastro :(."},
                {sender: "Beyoncé", receiver: "Aya", object: "Who run the world?", content: "Hey, how have you been doing? Hope you like E-Scola!"},
                {sender: "Judith", receiver: "Aya", object: "Possibility is not a luxury", content: "it is as crucial as bread."}]
    }
  }

  // componentDidMount() {
  //   axios.get('http://127.0.0.1:8000/api/get/messages')
  //   .then((res) => {
  //     this.setState({
  //       messages: res.data
  //     })
  //   })
  //   .catch(function (err) {
  //       console.log(err)
  //   });
  // }

  Messages() {
    return this.state.messages.map((message, index) => {
      return (
        <Message
          sender={message.sender}
          object={message.object}
          content={message.content}
          key={index}
        />
      )
    })
  }

  render() {
    return (
      <div className="container">
          <h1>Messages</h1>
          {this.Messages()}
      </div>
    )
  }
}
