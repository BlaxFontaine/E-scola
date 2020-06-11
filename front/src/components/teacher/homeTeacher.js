import React, {Component} from 'react';
import TeacherNav from './teacherNav';
import TeacherBanner from './teacherBanner';

export default class HomeTeacher extends Component {
    render() {
        return (
           
            <div >
                < TeacherBanner />
                < TeacherNav />
                <style jsx global>{`
                                body {
                                margin: 0px;
                                padding: 0px;
                                }
    `          }</style>
            </div>    
           
        );
    }
}