import React from 'react';
import { Link } from 'react-router-dom';
import './Navbar.css';
import logo from '../../assets/logo.jpg';
import user from '../../assets/user.png';
import cart from '../../assets/shopping-cart.png';

const Navbar = () => {
    return (
        <nav className="navbar">
          <div className='navbar-items'>
            <a href='#'><img src={logo} alt="Logo" /></a>
            <div className='navbar-search'>
              <label htmlFor='searchInput'>
                <input type='text' id='searchInput' autoComplete='off' placeholder="I'm looking for..." />
                <button type='submit'> Search </button>
              </label>
            </div>
            <div className='navbar-icons'>
              <Link>
                <img src={user} alt='user profile' />
              </Link>
              <img src={cart} alt='cart'></img>
            </div>
          </div>
          <div className='navbar-links'>
            <a href='/'>Home</a>
            <a href='#Products'>Products</a>
            <a href='#Collection'>Collections</a>
            <a href='#newArrivals'>New Arrivals</a>
            <a href='#Collaborations'>Collaborations</a>
            <a href='#Blog'>Blog</a>
          </div>
        </nav>
    );
};

export default Navbar;