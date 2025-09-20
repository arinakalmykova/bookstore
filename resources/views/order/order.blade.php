<html>
    <head>
        <title>Заказ</title>
    </head>
    <body> 
            @foreach($order->items as $item)
                <h3>Название:{{ $item->book->title }}</h3>
                <h3>Цена:{{ $item->book->price }} руб.</h3>
                <h3>Количество: {{ $item->quantity }}</h3>
            @endforeach
        <h3>Общая сумма:{{ $order->total_price }} руб.</h3>
        <a href="/order/success">Заказать</a>
    </body>
</html>