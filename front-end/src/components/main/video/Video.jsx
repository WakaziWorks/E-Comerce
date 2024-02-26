import React from 'react';
import vid from '../../../videos/vid1.mp4';
import './Video.css';

const Video = () => {
    return (
        <div className='main-video'>
            <video src={vid} autoPlay muted loop></video>
            <div className='video-content'>
                <h2>Heading here...</h2>
                <p> Some small descriptive information here... </p>
                <div className='video-buttons'>
                    <button className='shake'>SHOP HERE</button>
                    <button className='shake'>LEARN MORE</button>
                </div>
            </div>
        </div>
    );
}

export default Video;