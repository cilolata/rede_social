@section('cabecalho')
    <header id="app" class="mb-5">
        @guest
            <nav id="navigation" class="navbar fixed-top navbar-expand-md navbar-light shadow-sm">
                <div class="container">

                    <!--cabeçalho logo e nome--->
                    <a href="/index" class="navbar-brand d-flex align-items-center">
                        <img src="{{url("img/light-bulb.png")}}" alt="imagem_logo" class="d-inline-block">
                        <span>Together</span>
                    </a>
                    <!--fim cabeçalho logo e nome-->

                    <!--inicio formulario entrar-->
                    <div class="dropdown">
                        <div class="nav-wrapper">
                                <ul class="tool-nav">
                                    <li class="user">
                                        <a href="{{url('/login')}}">Login</a>
                                        <span>ou</span>
                                        <a class="highlight" href="{{url('/register')}}">Cadastrar-se</a>
                                    </li>
                                </ul>
                            </div>
                        <div>
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
                            <img  src="{{ url(Auth::user()->imagem) }} " class="rounded-circle img-profile" height="40" width="40" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="imagem do usuario">
                            <div class="navbar-text d-none d-lg-block ml-1">
                                {{ Auth::user()->name}}
                                <span class="caret"></span>
                            </div>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                <li class="nav-item dropdown-item"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
                                <li class="nav-item dropdown-item"><a href="{{url('/criandoEvento')}}" class="nav-link">Criar evento</a></li>
                                <li class="nav-item dropdown-item"><a href="{{url('/search')}}" class="nav-link">Eventos</a></li>
                                <li class="nav-item dropdown-item"><a href="{{url('/profile/'.Auth::user()->id)}}" class="nav-link"> Editar Perfil</a></li>
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