<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--bootstrap css-->
        <script src="https://kit.fontawesome.com/b90a86aab4.js"></script>
        <link rel="stylesheet" href="{{url("css/app.css")}}">
        <link rel="stylesheet" href="{{url("css/style.css")}}">
        <link rel="icon" type="image/png" sizes="60x60" href="img/light-bulb.png">
        <link href="https://fonts.googleapis.com/css?family=Chivo:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee|Comfortaa|Hind+Madurai|Inconsolata|Open+Sans|Red+Hat+Text|Varela+Round&display=swap" rel="stylesheet">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @section('title', 'Together')
        <title>@yield('Together')</title>
    </head>

    <body>
        @yield("cabecalho")
        <main>
            @yield('content')
        </main>
        @yield("footer")

    </body>

</html>