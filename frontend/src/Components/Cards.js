import axios from 'axios';
import React, { useState, useEffect } from 'react';
import Card from './Card';

function Cards() {
  const [cards, setCards] = useState([]);
  useEffect(() => {
    const getCards = async () => {
      const cardList = await axios.get('http://localhost:81/hand');
      setCards(cardList.data);
    };
    getCards();
  }, []);

  return (
    <div className='row'>
      {cards.map((card) => (
        <Card card={card} key={card.id} />
      ))}
      <div className='col-md-2'>
        <button className='btn btn-primary mb-2 mt-2'>Sort with JS</button>
        <button className='btn btn-secondary'>Sort from Api</button>
      </div>
    </div>
  );
}

export default Cards;
