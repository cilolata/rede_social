@section('cabecalho')

<header id="app" class="mb-5">
    @guest
    <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm">
        <div class="container">

            <!--cabeçalho logo e nome--->
            <a href="/index" class="navbar-brand d-flex align-items-center">
                <img src="{{url("img/light-bulb.png")}}" alt="imagem_logo" class="d-inline-block">
                <span>Together</span>
            </a>
            <!--fim cabeçalho logo e nome-->

            <!--inicio formulario entrar-->
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle rounded-5 " type="button"
                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Entrar
                </button>
                <div class="dropdown-menu dropdown-menu-right mr-5" aria-labelledby="dropdownMenu2">
                    <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                        @csrf
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
                            <label class="form-check-label" for="dropdownCheck">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary mt-3">Entrar</button>
                    </form>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('register') }}">Novo por aqui? Cadastre-se</a>
                    <a class="dropdown-item" href=" # ">Esqueceu sua senha?</a>
                </div>

                @else
                <!--cabeçalho--->
                <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm">
                    <div class="container">
                        <a href="/home" class="navbar-brand d-flex align-items-center">
                            <img src="{{url("img/light-bulb.png")}}" alt="imagem_logo" class="d-inline-block">
                            <span>Together</span>
                        </a>
                        <div class="dropdown header-paginas-internas" id="nav-principal">
                            <div class="navbar-nav list-unstyle ml-auto ">
                            
                                    <img  src="img/profile.jpeg" class="rounded-circle img-profile" height="25" width="25" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" alt="">
                                <div class="navbar-text d-none d-lg-block">
                                    {{ Auth::user()->name}}
                                    <span class="caret"></span>
                                </div>
                                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                    <li class="nav-item dropdown-item"><a href="#" class="nav-link">Comunidades</a></li>
                                    <li class="nav-item dropdown-item"><a href="{{url('/criandoEvento')}}"
                                            class="nav-link">Criar evento</a></li>
                                    <li class="nav-item dropdown-item"><a href="{{url('/search')}}"
                                            class="nav-link">Eventos</a></li>
                                    <li class="nav-item dropdown-item"><a href="{{url('/profile')}}"
                                            class="nav-link">Perfil</a></li>
                                    <li class="nav-item dropdown-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <!--fim formulario entrar-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endguest
                    </div>
                </nav>
            </div>
        </div>
    </nav>
</header>
<!--fim cabeçalho-->

@endsection