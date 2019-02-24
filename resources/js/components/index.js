import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Header from './Header';
import Footer from './Footer';
import Javascript from './Javascript_l01';

export default class Index extends Component {
    render() {
        return (
            <div className="container">
                <div>
                   <Header currentUser="Champ Boomgt" isLoggedIn/>
                   <p>ประโยคคำสั่ง Error ของ Javascript</p>
                   <table className="table">
                        <thead>
                            <tr>
                            <th scope="col">ออบเจ็กต์</th>
                            <th scope="col">ความหมาย</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>EvalError</td>
                            <td>เป็น Error ที่เกียวกับการเรียกใช้ฟังก์ชั่น eval()</td>
                            </tr>
                            <tr>
                            <td>RangeError</td>
                            <td>เป็น Error ที่เกียวกับขอบเขตของข้อมูล</td>
                            </tr>
                            <tr>
                            <td>ReferenceError</td>
                            <td>เป็น Error ที่เกียวกับการอ้างอิงข้อมูลของตัวแปร</td>
                            </tr>
                            <tr>
                            <td>SyntaxError</td>
                            <td>เป็น Error ที่เกียวกับไวยากรณ์ของภาษา</td>
                            </tr>
                            <tr>
                            <td>TypeError</td>
                            <td>เป็น Error ที่เกียวกับชนิดข้อมูล</td>
                            </tr>
                            <tr>
                            <td>URIError</td>
                            <td>เป็น Error ที่เกียวกับ URI</td>
                            </tr>
                        </tbody>
                        </table>
                        <Javascript/>
                    <Footer/>
                </div>
            </div>
        );
    }
}
if (document.getElementById('example')) {
    ReactDOM.render(<Index />, document.getElementById('example'));
}
