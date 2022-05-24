<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StoreApp - @yield("title")</title>
    <link rel="stylesheet" href="/global.css">
</head>
<body>
    <nav>
        <a class="{{(request()->is('products')) ? 'active':''}}" href="/products">Products</a>
        <a class="{{(request()->is('products/create')) ? 'active':''}}" href="/products/create">Create Product</a>
    </nav>
    <main>
        @yield("content")  
    </main>
</body>
</html>