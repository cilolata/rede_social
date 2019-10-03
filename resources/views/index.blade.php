@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together')
@section('content')

<main>

  

  <!--section caixa-destaque-1-->
  <section>
    <div class="caixa-destaque1">
      <div class="conteudo-caixa col-md-3 align-self-center p-4">
        <h1 class="display-5 p-1">Conecte-se com pessoas que querem mudar o mundo</h1>
        <p class="p-1">Ache pessoas que tenham interesses comuns em promover ações positivas na sociedade. 
        </p>
        <a class="btn btn-outline-dark btn-md" href="{{url('register')}}" role="button">Cadastre-se</a>
      </div>
    </div>
  </section>
  <!--fim caixa-destaque1-->

  <!--section banner-->
  <section>
    <div class="caixa-banner">
    </div>
  </section>
  <!-- fim section destaque1-->

  <!--section caixa-destaque-2-->
  <section>
    <div class="caixa-destaque2">
        <div class="conteudo-caixa2 col-md-3 align-self-center ml-auto p-4">
            <h1 class="display-5 p-1">O que é a Together?</h1>
            <p class="p-1"> Somos uma rede social dedicada a juntar pessoas para o bem comum.
            </p>
            <p>Para tanto, nos baseamos na Teoria das Janelas Quebradas e propomos uma série de ações de cidadania, nas quais pessoas podem se encontrar com objetivos em comum: melhorar o entorno de suas comunidades, promovendo ações sociais, que cuidem de pessoas, praças, animais, etc e que possam ser replicadas, promovendo melhorias em toda sociedade. </p>
            <a class="btn btn-outline-dark btn-md" href="{{url('register')}}" role="button">Saiba mais</a>
          </div>
    </div>
  </section>
  <!--fim section destaque-2-->


<!--section eventos-->
  <section class="minhas_comunidades mt-5 d-none d-lg-block d-xl-block container">
    <h5 class="mt-5">Eventos</h5>
    <div class="row">
      @foreach ($eventos as $evento)
          
      <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
        <div class="card d-block">
        <img class="card-img-top" src="{{$evento->imagem}}" alt="Imagem de capa do card">
          <div class="card-body">
          <h5 class="card-title">{{$evento->titulo}}</h5>
            <p class="card-text">{{$evento->descricao}}.</p>
              <a href="event/{{$evento->id}}" class="btn btn-outline-secondary">Visitar</a>
            </div>
          </div>
        </div>
        
        @endforeach 
    </div>
  </section>

  <!-- inicio carousel -->
  <section class="d-xl-none d-lg-none m-4 div-card-anuncios">

    <article>
      <h5 class="ml-3 mb-3">Eventos</h5>
      <div class="d-flex row justify-content-center ml-5 pl-3 mt-5">
        <!--Carousel Wrapper-->
        <div id="myCarousel" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Indicators-->
          <ol class="carousel-indicators">
            @foreach($eventos as $evento)
            <li data-target="#multi-item-example" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
          </ol>
          <!--/.Indicators-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">
             
          @foreach ($eventos as $evento)
            <!--First slide-->
            <div class="carousel-item {{ $loop->first ? 'active' : ''}}">
              <div class="col-md-4">
                <div class="card mb-2 w-75">
                  <img class="card-img-top w-100" src="{{$evento->imagem}}" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h4 class="card-title">{{$evento->titulo}}</h4>
                    <p class="card-text">{{$evento->descricao}}</p>
                    <a href="event/{{$evento->id}}" class="btn btn-secondary">Visitar</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.First slide-->
          @endforeach
          
          </div>
        </div>
      </article>
    </section>
</main>
@endsection