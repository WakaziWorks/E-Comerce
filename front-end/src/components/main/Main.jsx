import React, {useState, useEffect} from 'react';
import './Main.css';
import img1 from 'images/img1.webp'

const Main = () => {
    const [slideIndex, setSlideIndex] = useState(0);
  
    useEffect(() => {
      const intervalId = setInterval(() => {
        setSlideIndex(prevIndex => (prevIndex + 1) % 7); // Change '7' to the number of slides
      }, 2000);
      return () => clearInterval(intervalId);
    }, []);
  
    const nextSlide = () => {
      setSlideIndex(prevIndex => (prevIndex + 1) % 7); // Change '7' to the number of slides
    };
  
    const prevSlide = () => {
      setSlideIndex(prevIndex => (prevIndex === 0 ? 6 : prevIndex - 1)); // Change '7' to the number of slides
    };
  
    return (
      <div className="Main-container">
        <div className="Main-slide">
          <img src={`image${slideIndex + 1}.jpg`} alt={`Image ${slideIndex + 1}`} />
          <div className="text-overlay">
            <h2>Text Overlay {slideIndex + 1}</h2>
            <p>Description of Image {slideIndex + 1}</p>
          </div>
        </div>
        <button className="prev" onClick={prevSlide}>&#10094;</button>
        <button className="next" onClick={nextSlide}>&#10095;</button>
      </div>
    );
  };
  
  export default Main;