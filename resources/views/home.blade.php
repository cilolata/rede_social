@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Home')

@section('content')
<main class="container" id="main-home">

    <!--inicio section pesquisar-home-->
    <section class=" p-5">
        <div class=" row d-flex justify-content-center">
            <div class="">
                <h4 class="paragrafo-pesquisar text-center text-capitalize font-weight-light p-5 d-none d-lg-block">
                    Ache um grupo ou atividade e junte-se para transformar a sua comunidade
                </h4>
                <div class=" botao-home d-flex justify-content-center">
                    <button type="button" class="btn btn-home col-12 col-lg-3 mt-2 btn-md w-100 mr-4"> <a href="{{url('/criandoEvento')}}"
                            class="text-secondary">Crie um Evento</a></button>
                    <button type="button" class="btn btn-home btn-home2 mt-2 col-lg-3 col-12 btn-md w-100 "><a href="{{url('/search')}}"
                            class="text-secondary">Veja todos os Eventos</a> </button>
                </div>
            </div>
    </section>
    <h4 class="paragrafo-pesquisar text-center text-capitalize font-weight-light d-none d-lg-block">
        Ou Ache um evento por uma categoria
    </h4>
    <!--fim section pesquisar-->
    <section class="nichos mt-1 p-5 d-lg-flex d-none justify-content-around flex-wrap">
        <a href="{{route('/ecologia',['ecologia'])}}"><img class="mt-3 d-none d-lg-block" src="img/arvore.png" alt="ecologia"
                title="ecologia"></a>
        <a href="{{route('/saude',['saude'])}}"><img class=" nichos-img mt-3 d-none d-lg-block" src="img/doacao-de-sangue.png" alt="saúde"
                title="saúde"></a>
        <a href="{{route('/alimentacao',['alimentacao'])}}"> <img class="mt-3 d-none d-lg-block" src="img/cereais.png" alt="alimentação"
                title="alimentação"></a>
        <a href="{{route('/animais',['animais'])}}"><img class="mt-3 d-none d-lg-block" src="img/cao.png" alt="animais"
                title="animais"></a>
        <a href="{{route('/cidadania',['cidadania'])}}"><img class="mt-3 d-none d-lg-block" src="img/friendship.png" alt="cidadania"
                title="cidadania"></a>
    </section>

    <!--inicio meus eventos-->
    <section class="container mt-5  ">
        <h4 class="ml-3">Meus Eventos</h4>
        <div class="row">
            @foreach ($eventos as $evento)
            @if ($evento->fk_users == Auth::user()->id)
            <div class="card meus-eventos mt-3 ml-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$evento->titulo}}</h5>
                    <p class="card-text">{{$evento->descricao}}</p>
                    <a href="event/{{$evento->id}}" class="card-link">Acesse</a>
                </div>
            </div>
            @endif
            @endforeach
    </section>
</main>
@endsection