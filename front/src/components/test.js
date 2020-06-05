import React, {Component} from 'react';
import axios from 'axios';
    
    
class Test extends Component {
    constructor() {
        super();
        
        this.state = { posts: [], loading: true}
    }
    
    componentDidMount() {
        this.getPosts();
    }
    
    getPosts() {
        axios.get(`http://127.0.0.1:8000/api/get/mascot/`).then(res => {
            const posts = res.data;
            this.setState({ posts, loading: false })
        })
    }
    
    render() {
        const loading = this.state.loading;
        return (
            <div>
                {this.state.posts.map(post =>
                    <div> <p>{post.state} : {post.phrase}</p></div>
                                )}
            </div>
        )
    }
}
    
export default Test;