import React, {Component} from 'react';
import axios from 'axios';
    
    
class Test extends Component {
    constructor() {
        super();
        
        this.state = { 
            posts: [],
            classes: []
        }
    }
    
    componentDidMount() {
        this.getClasses();
    }
    
    getPosts() {
        axios.get(`http://127.0.0.1:8000/api/get/mascot/`).then(res => {
            const posts = res.data;
            this.setState({ posts })
        })
    }

    getClasses() {
        axios.get(`http://127.0.0.1:8000/api/get/classes/all`).then(res => {
            const classes = res.data;
            this.setState({ classes })
        })
    }
    
    render() {
        return (
            <div>
                {this.state.classes.map(post =>
                    <div> <il key = {post.id}> {post.name} </il></div>
                                )}
            </div>
        )
    }
}
    
export default Test;