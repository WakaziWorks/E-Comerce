import React from 'react';
import Video from './video/Video';
import Category from './categories/Category';
import './Main.css';

const Main = () => {
  return (
    <div className="main-container">
      <Video />
      <Category />
    </div>
  );
}


export default Main;