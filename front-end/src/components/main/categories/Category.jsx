import React from 'react';
import './Category.css';

const Category = () => {
    return (
        <div className='prod-categories'>
            <h1>New Arrivals</h1>
            <div className='category'>
                <div className='cols'>
                    <img src='https://imgs.search.brave.com/Qud_a4cnm4aC6MafSTRCK39p_gvh7qeQ1O7Z_RoN4ew/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2EzLzQ1/LzhjL2EzNDU4Y2Qx/ODZiZTI3YzhlY2Iy/MjcxNWFhNzhmOGJl/LmpwZw' alt='prod-Photo' />
                    <h3>Category 1</h3>
                </div>
                <div className='cols'>
                    <img src='https://imgs.search.brave.com/Qud_a4cnm4aC6MafSTRCK39p_gvh7qeQ1O7Z_RoN4ew/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2EzLzQ1/LzhjL2EzNDU4Y2Qx/ODZiZTI3YzhlY2Iy/MjcxNWFhNzhmOGJl/LmpwZw' alt='prod-Photo' />
                    <h3>Category 2</h3>
                </div>
                <div className='cols'>
                    <img src='https://imgs.search.brave.com/Qud_a4cnm4aC6MafSTRCK39p_gvh7qeQ1O7Z_RoN4ew/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2EzLzQ1/LzhjL2EzNDU4Y2Qx/ODZiZTI3YzhlY2Iy/MjcxNWFhNzhmOGJl/LmpwZw' alt='prod-Photo' />
                    <h3>Category 3</h3>
                </div>
            </div>
        </div>
    );
}

export default Category;