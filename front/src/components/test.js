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
    
                        {loading ? (
                            <div className={'row text-center'}>
                                <span className="fa fa-spin fa-spinner fa-4x"></span>
                            </div>
    
                        ) : (
                            <div className={'row'}>
                                {this.state.posts.map(post =>
                                            <li>
                                                        <h4>{post.phrase}</h4>
                                                        <p>{post.state}</p>
                                            </li>
                                )}
                            </div>
                        )}
            </div>
        )
    }
}
    
export default Test;