@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Home')

@section('content')
<main class="container" id="main-home">

    <!--inicio section pesquisar-home-->
    <section class="pesquisar-home p-5">
        <div class="row d-flex justify-content-center">
            <h4 class="paragrafo-pesquisar text-center text-capitalize font-weight-light p-5 mt-5 d-none d-lg-block">
                Ache um grupo ou atividade e junte-se para transformar a sua comunidade
            </h4>
                <form action="/home" method="GET" class="home-pesquisar form-group" enctype="multipart/form-data">    
                <input type="text" name="palavra" value="" class="form-control input-pesquisar tex-align-center shadow-sm" aria-label="pesquisar-area" placeholder="Pesquisar Eventos">
                    <button type="submit" class="icon-pesquisar"><i class="fas fa-search"></i></button>
                </form>
        </div>
    </section>
    
    <!--fim section pesquisar-->
    <section class="nichos mt-1 p-5 d-lg-flex d-none justify-content-around flex-wrap">
        <a href="{{url('search')}}"><img class="mt-3 d-none d-lg-block" src="img/arvore.png" alt="ecologia" title="ecologia"></a>
        <a href="{{url('search')}}"><img class="mt-3 d-none d-lg-block" src="img/doacao-de-sangue.png" alt="saúde" title="saúde"></a>
        <a href="{{url('search')}}"> <img class="mt-3 d-none d-lg-block" src="img/cereais.png" alt="alimentação" title="alimentação"></a>
        <a href="{{url('search')}}"><img class="mt-3 d-none d-lg-block" src="img/cao.png" alt="animais" title="animais"></a>
        <a href="{{url('search')}}"><img class="mt-3 d-none d-lg-block" src="img/friendship.png" alt="cidadania" title="cidadania"></a>
    </section>



    <!--inicio meus eventos-->
    <section class="container mt-5  ">

        <h4 class="ml-5">Meus Eventos</h4>
        <div class="row">
            @foreach ($eventos as $evento)
            <div class="card meus-eventos mt-3 ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$evento->titulo}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> Criado por: {{$evento->users->name}}</h6>
                        <p class="card-text">{{$evento->descricao}}</p>
                        <a href="event/{{$evento->id}}" class="card-link">Acesse</a>
                    </div>
                </div>
            @endforeach

        {{--    @foreach (App\Eventos::all() as $evento) --}}
    
            <div class="card meus-eventos mt-3 ml-5" style="width: 18rem;">
                    <div class="card-body">
                        {{-- <h5 class="card-title">{{$evento->titulo}}</h5> --}}
                        {{-- <h6 class="card-subtitle mb-2 text-muted"> Criado por:{{Auth::user()->name}}</h6> --}}
                        {{-- <h6 class="card-subtitle mb-2 text-muted"> Criado por:{{$evento->users->name}}</h6> --}}
                        {{-- <p class="card-text">{{$evento->descricao}}</p> --}}
                        {{-- <a href="event/{{$evento->id}}" class="card-link">Acesse</a> --}}
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    
    </section>

</main>
@endsection