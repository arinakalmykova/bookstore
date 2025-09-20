import React from 'react';
import {Link} from '@inertiajs/react';

export default function Success(){
    return (
        <div className="success-page">
             <h1>Заказ успешно оформлен!</h1>
             <Link className="btn-primary" href={`/books`}>В каталог</Link>
        </div>
    );
}