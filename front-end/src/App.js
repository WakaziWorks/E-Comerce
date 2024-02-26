import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Navbar from './components/navbar/Navbar';
import Main from './components/main/Main';
import Footer from './components/footer/Footer';
import Login from './components/pages/login/Login';

function App() {
    return (
        <div>
            <Navbar />
            <Switch>
                <Route path="/login" component={Login} />
                <Route path="/" component={Main} />
            </Switch>
            {/* <Main /> */}
            <Footer />
        </div>
    );
}

export default App;