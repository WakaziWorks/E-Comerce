import React from 'react';
import './Navbar.css';

const Navbar = () => {
    return (
        <nav className="navbar">
          <div className='navbar-items'>
            <div className="navbar-logo">
              <img src="image_path" alt="Logo" />
            </div>
            <div className='navbar-search'>
              <input type='text' placeholder="I'm looking for..."></input>
              <button>Search</button>
            </div>
            <div className='navbar-icons'>
              <img src='https://imgs.search.brave.com/hPmmyg8nuNX_TVLZVC-8ev60xCcMjUg9vyPWi6aDA-0/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9lbi5w/aW1nLmpwLzA0Ny82/OTUvMTk2LzEvNDc2/OTUxOTYuanBn' alt='account'></img>
              <img src='https://imgs.search.brave.com/8Sdghc_LWqQEh0yNuuJnbmw5r6_TVvzW2aXn870S-tE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/aWNvbnBhY2tzLm5l/dC9pY29ucy8zL2Zy/ZWUtaWNvbi1wdXJw/bGUtc2hvcHBpbmct/Y2FydC0xMDkxMS5w/bmc' alt='cart'></img>
            </div>
          </div>
          <div className='navbar-links'>
            <a href='/'>Home</a>
            <a href='#Products'>Products</a>
            <a href='#Decor'>Decor</a>
            <a href='#Accesories'>Accesories</a>
            <a href='#Jewellery'>Jewellery</a>
            <a href='#About'>About Us</a>
            <a href='#Account'>Contact</a>
          </div>
        </nav>
    );
};

export default Navbar;