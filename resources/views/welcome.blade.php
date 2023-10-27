<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Escanea y come</title>
    </head>
    <body>
        <h1>Menú para entrar a las rutas rapido</h1>
        <ol>
            <li><a href="{{ url('/restaurants') }}">Mi restaurante</a></li>
            <li><a href="{{ url('/dishes') }}">Mis platillos</a></li>
        </ol>
    </body>
</html>
