function Card({ card }) {
  console.log(card);
  const url = `images/${card.type}/${card.name}.gif`;
  return (
    <div className='col-md-1 mt-2'>
      <img src={url} alt='' />
    </div>
  );
}

export default Card;
