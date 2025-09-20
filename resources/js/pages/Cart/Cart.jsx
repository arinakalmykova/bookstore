import React from "react";
import {useForm,Link} from '@inertiajs/react'

export default function Cart({books}){
    const {data, setData, post} = useForm({books:[]});
    const handleSubmit = (e) => {
        e.preventDefault();
        post(route('order.selected'));
    }
    return (
        <form onSubmit={handleSubmit} className="cart">
        <h1>Корзина</h1>
        <div className="cart-items">
         { books && books.length > 0 ? (
        books.map((book)=> (
            <div key={book.id} class="cart-item"> 
                <h2>{book.book.title}</h2>
                <h3><span>Количество:</span>{book.quantity}</h3>
                   <input type="checkbox" value={book.book_id} checked={data.books.includes(book.book_id)}
          onChange={(e) => {
            if (e.target.checked) {
              setData('books', [...data.books, book.book_id]);
            } else {
              setData('books', data.books.filter(id => id !== book.book_id));
            }
          }}
        /> 
                <div class="btn-cart">
                <Link id="btn" href={`/cart/delete/${book.book.id}`} method="post" as="button">Удалить</Link>
                <Link id="btn" href={`/cart/add/${book.book.id}`} method="post" as="button">Добавить </Link>
                </div>
              </div>
        ))) : (
          <h2>В корзине ничего нет</h2>
        )}</div>
        <button className="btn-primary" type="submit">Заказать</button>
        </form>
    );
}