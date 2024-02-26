import React from 'react';
import vid from '../../../videos/vid1.mp4';
import './Video.css';

const Video = () => {
    return (
        <div className='main-video'>
            <video src={vid} autoPlay muted loop></video>
            <div className='vid-content'>
                <h2>LOREM IPSUM</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
                <p> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div className='video-buttons'>
                    <button className='shake'>SHOP HERE</button>
                    <button className='shake'>LEARN MORE</button>
                </div>
            </div>
        </div>
    );
}

export default Video;