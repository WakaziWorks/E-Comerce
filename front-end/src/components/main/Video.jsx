import React from 'react';
import vid from '../../videos/vid1.mp4';
import './Video.css';

const Video = () => {
    return (
        <div className='main-video'>
            <video src={vid} autoPlay muted loop></video>
            <div className='video-content'>
                <h1>E-Comerce Center</h1>
                <p> Authentic african furnitures, accesories etc...</p>
                <button>SHOP HERE</button>
                <button>LEARN MORE</button>
            </div>
        </div>
    );
}

export default Video;