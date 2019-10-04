@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Home')

@section('content')
<main class="container" id="main-home">

    <!--inicio section home-->
    <section class="p-5">
        <div class="row d-flex justify-content-center">
            <div class="home-inicial">
                <h4 class="paragrafo-pesquisar text-center text-capitalize font-weight-light p-5">
                    Que tipo de evento gostaria de ajudar? Escolha por uma categoria!
                </h4>
                <div class=" botao-home d-flex justify-content-center  ">
                    <button type="button"
                        class="btn btn-home col-12 col-lg-3 mt-2 btn-md w-100 mr-4 d-block d-lg-none "> <a
                            href="{{url('/search')}}" class="text-secondary">Procure por um evento</a></button>
                </div>
                <div class="img-hover p-5 d-none d-lg-block">
                    <a href="{{route('/ecologia',['ecologia'])}}"><img class="img-responsive" src="img/arvore.png"
                            alt="ecologia" title="Ecologia"></a>
                    <a href="{{route('/saude',['saude'])}}"><img class="img-responsive" src="img/doacao-de-sangue.png"
                            alt="saúde" title="Saúde"></a>
                    <a href="{{route('/alimentacao',['alimentacao'])}}"> <img class="img-responsive"
                            src="img/cereais.png" alt="alimentação" title="Alimentação"></a>
                    <a href="{{route('/animais',['animais'])}}"><img class="img-responsive" src="img/cao.png"
                            alt="animais" title="Animais"></a>
                    <a href="{{route('/cidadania',['cidadania'])}}"><img class="img-responsive" src="img/friendship.png"
                            alt="cidadania" title="Cidadania"></a>
                </div>
                <h4 class="text-center text-capitalize font-weight-light p-5">Ou crie seu próprio evento!</h4>
                <div class=" botao-home d-flex justify-content-center">
                    <button type="button" class="btn btn-home col-12 col-lg-3 mt-2 btn-md w-100 mr-4"> <a
                            href="{{url('/criandoEvento')}}" class="text-secondary">Crie um Evento</a></button>
                </div>
            </div>
    </section>


    <!--inicio meus eventos-->
    <section class="container mt-5">
        <h4>Meus Eventos</h4>
        <div class="row">
            @foreach ($eventos as $evento)
            @if ($evento->fk_users == Auth::user()->id)
            <div class="card meus-eventos mt-3 mx-3" style="width: 18rem;">
                <img src="{{$evento->imagem}}" class="card-img-top w-100" alt="imagem-evento">
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