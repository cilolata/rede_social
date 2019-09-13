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
        
        <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <link defer src="{{url('js/app.js')}}">
        <script defer src="{{url('js/main.js')}}" ></script>
   

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