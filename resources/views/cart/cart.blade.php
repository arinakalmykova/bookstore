<html>
    <head>
        <title>Корзина</title>
    </head>
    <body>
        <form action = "{{ route('order.selected') }}" method="POST">
        @csrf
        @foreach($books as $book)
            {{$book->book->title}}
             {{$book->quantity}}
            <a href="/cart/delete/{{{$book->id}}}">Удалить</a>
            <a href="/cart/add/{{{$book->id}}}">Добавить</a>
            <input type="checkbox" value="{{$book->book_id}}" name="books[]">
        @endforeach
        <button type="submit">Заказать</button>
        </form> 
    </body>
</html>