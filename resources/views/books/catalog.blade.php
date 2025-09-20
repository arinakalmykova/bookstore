@viteReactRefresh
@vite('resources/js/app.jsx')
<html>
    <head>
        <title>Каталог книг</title>
    </head>
    <body>
        <div id="app" data-books="@json($books)"></div>
    </body>
</html>