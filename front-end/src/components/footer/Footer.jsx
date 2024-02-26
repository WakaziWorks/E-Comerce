import React from 'react';
import './Footer.css';
import ig from '../../assets/ig.png';
import x from '../../assets/x.png';
import linkedin from '../../assets/in.png';
import youtube from '../../assets/youtube.png';

const Footer = () => {
    return (
        <div className='footer'>
            <div className='footer-cols'>
                <div className='col'>
                    <h3>Shopping Guide</h3>
                    <a href='#'>How long does my order arrive?</a>
                    <a href='#'>How do I pay on wakazi?</a>
                    <a href='#'>How to shop on wakazi</a>
                    <a href='#'>Forgot password?</a>
                </div>
                <div className='col'>
                    <h3>Customer Help Center</h3>
                    <a href='#'>Dispute resolution policy</a> <br />
                    <a href='#'>Delivery and shipping</a> <br />
                    <a href='#'>Terms and conditions</a> <br />
                    <a href='#'>Account settings</a> <br />
                    <a href='#'>FAQ center</a>
                </div>
                <div className='col'>
                    <h3>Wakazi</h3>
                    <a href='#'>About us</a> <br />
                    <a href='#'>Our mission</a> <br />
                    <a href='#'>Core values</a> <br />
                    <a href='#'>Our Location</a>
                </div>
                <div className='col'>
                    <h3>Social Media</h3>
                    <a href='https://www.instagram.com/wakazi_works/' target='blank'><img src={ig} alt='instagram logo'></img></a>
                    <a href='https://twitter.com/wakaziworks' target='blank'><img src={x} alt='x logo'></img></a>
                    <a href='https://ke.linkedin.com/company/wakazi-works-platform' target='blank'><img src={linkedin} alt='linkedin logo'></img></a>
                    <a href='https://www.youtube.com/@WakaziWorks' target='blank'><img src={youtube} alt='youtube logo'></img></a>
                </div>
            </div>
        </div>
    );
}

export default Footer;