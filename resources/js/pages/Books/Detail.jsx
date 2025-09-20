import React from 'react';

export default function Detail({book}){
    return (
    <div className="detail-card">
       
            <img src={book.img} alt={book.title} className="detail-image"/>   
            <div className="detail">
            <h1>{book.title}</h1>
            <div className="info">
                <h2>Информация о книге</h2>
                <h3><span>Серия:</span>{book.series.name}</h3>
                <h3><span>Жанр:</span>{book.genre.name}</h3>
                <h3><span>Автор:</span>{book.author.name}</h3>
                <h3><span>Издатель:</span>{book.publisher.name}</h3>
                <h3><span>Год написания:</span>{book.year}</h3>
                <h3><span>Цена:</span>{book.price} руб.</h3>
            </div>
                    <div className="btn-card">
                        <a href={`/cart/add/${book.id}`}>Добавить в корзину</a> 
                    </div>
            </div>
        </div>
        );
}