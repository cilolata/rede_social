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
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar senha') }}
                                        </label>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary">
                                    {{ __('Login') }}
                                </button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('register') }}">Novo por aqui? Cadastre-se</a>
                            @if (Route::has('password.request'))
                                <a class="dropdown-item" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
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
                            <img  src="https://i.pinimg.com/originals/b9/58/5a/b9585a9d1b20060f0d7e83c72eaa159f.jpg" class="rounded-circle img-profile" height="25" width="25" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="">
                            <div class="navbar-text d-none d-lg-block">
                                {{ Auth::user()->name}}
                                <span class="caret"></span>
                            </div>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                <li class="nav-item dropdown-item"><a href="#" class="nav-link">Comunidades</a></li>
                                <li class="nav-item dropdown-item"><a href="{{url('/criandoEvento')}}" class="nav-link">Criar evento</a></li>
                                <li class="nav-item dropdown-item"><a href="{{url('/search')}}" class="nav-link">Eventos</a></li>
                                <li class="nav-item dropdown-item"><a href="{{url('/profile')}}" class="nav-link">Perfil</a></li>
                                <li class="nav-item dropdown-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <!--fim formulario entrar-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        @endguest       
    </header>
    <!--fim cabeçalho-->
@endsection