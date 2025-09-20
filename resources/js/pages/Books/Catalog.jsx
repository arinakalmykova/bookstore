import React from 'react';

export default function Books({books}){
    return (
        <div className="catalog-page">
            <div className="catalog-head">
            <h1>Каталог книг</h1>
            <a href={`/cart`}>Корзина</a>
            </div>
            <div className="catalog">
                {books.map((book) => (
                <div key={book.id} className="card">  
                    <img src={book.img} alt={book.title} className="book-image"/>
                    <h2>{book.title}</h2>
                    <span>{book.price} руб.</span>
                    <div className="btn-card">
                    <a href={`/books/${book.id}`}>Смотреть</a> 
                    <a href={`/cart/add/${book.id}`}>Добавить в корзину</a> 
                    </div>
                </div>))}
            </div>
        </div>
    )
}