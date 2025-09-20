import React from 'react';
import {Link} from '@inertiajs/react'
export default function Order({order}){
    return (
        <div className="order-page">
        <h1>Заказ</h1>
        <div className="order-items">
        {order.items.map((item)=>(
        <div key={item.id} class="order-item">
            <h3><span>Название:</span>{ item.book.title }</h3>
            <h3><span>Цена:</span>{ item.book.price } руб.</h3>
            <h3><span>Количество: { item.quantity }</span></h3>
        </div>
    ))}</div>
    <div className="total_price">
    <h3><span>Общая сумма:</span>{ order.total_price } руб.</h3>
    </div>
    <Link className="btn-primary" href={`/order/success`}>Заказать</Link>
    </div>
    );
}