<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    @include('partials.cabecera')
    <main>
    @yield('contenido')
    </main>
    @include('partials.pie')
</body>
</html>
