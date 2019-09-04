<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--bootstrap css-->
        <script src="https://kit.fontawesome.com/b90a86aab4.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" sizes="60x60" href="img/light-bulb (4).png">
        <link href="https://fonts.googleapis.com/css?family=Chivo:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee|Comfortaa|Hind+Madurai|Inconsolata|Open+Sans|Red+Hat+Text|Varela+Round&display=swap" rel="stylesheet">  
        @section('title', 'Rede Social')
        <title>@yield('title')</title>
    </head>

    <body>
        <header id="app">
            <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm">
                <div class="container">

                    <!--cabeçalho logo e nome--->
                    <a href="index" class="navbar-brand d-flex align-items-center">
                        <img src="img/light-bulb (4).png" alt="imagem_logo" class="d-inline-block">
                        <span>Nome da Rede</span>
                    </a>
                    <!--fim cabeçalho logo e nome-->

                    <!--inicio formulario entrar-->
                    @guest
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-success dropdown-toggle rounded-5 " type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Entrar
                        </button>
                        <div class="dropdown-menu dropdown-menu-right mr-5" aria-labelledby="dropdownMenu2">
                            <form class="px-4 py-3">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                        placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword1">Senha</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-check mt-3">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                       Lembrar-me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3">Entrar</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#cadastrar">Novo por aqui? Cadastre-se</a>
                            <a class="dropdown-item" href="#">Esqueceu sua senha?</a>
                        </div>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </div>
                    <!--fim formulario entrar-->
                </div>
            </nav>
        </header>
        <!--fim cabeçalho-->

        <main>
            @yield('content')
        </main>
        <footer class="container-fluid">
            <div class="col-12">
                <ul class="list-unstyled">
                    <div>
                        <div class="d-flex flex-row justify-content-center">
                            <li class="mr-2"><a href="contact-us.php"><i class="fas fa-mail-bulk fa-2x"></i></a></li>
                            <li class="mr-2"><a href="https://pt-br.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-square fa-2x"></i></a></li>
                            <li class="mr-2"><a href="https://www.instagram.com/?hl=pt-br" target="_blank"><i
                                        class="fab fa-instagram fa-2x"></i></a></li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="row">
                <div id="copyright" class="small col-12 text-center">Direitos Reservados <a
                        href="https://www.flaticon.com/" title="Rede Social">Rede Social</a>&copy; 2019</div>
            </div>
        </footer>
    </body>

</html>