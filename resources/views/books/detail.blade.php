@viteReactRefresh
@vite('resources/js/app.jsx')
<html>
    <head>
        <title> {{$book->title}}</title>
    </head>
    <body>
            {{$book->title}}
            {{$book->series->name}}
            {{$book->genre->name}}
            {{$book->author->name}}
            {{$book->publisher->name}}
            {{$book->year}}
    </body>
</html>