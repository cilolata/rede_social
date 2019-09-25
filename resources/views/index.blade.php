@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together')
@section('content')

<main>

  <!-- inicio section destaque-->
  <section id="destaque" class="d-flex align-items-center container">
    <article class="row">
      <div class="col-12 col-lg-6 mt-5">
        <h1 class="display-5 display-sm-1">Conecte-se com pessoas que querem mudar o mundo</h1>
        <p class="text-justify">Conecte-se pessoas que tenham interesses comuns em promover ações positivas na
           sociedade. 
        </p>
        <a class="btn btn-outline-secondary btn-md" href="{{url('register')}}" role="button">Cadastre-se</a>
      </div>
      <div class="imagem-principal col-6 d-none d-lg-block">
        <div class="d-flex justify-content-center">
          <img src="img/destaque1.jpg" alt="lâmpada com folha" class="w-75 ml-5">
        </div>
    </article>
  </section>

  <!--section caixa-destaque-1-->
  <section class="">
    <div class="caixa-destaque1">
    </div>
  </section>
  <!--fim caixa-destaque1-->

  <!--section destaque1-->
  <section id="destaque1" class="d-flex container">
    <article class="row">
      <div class="d-flex justify-content-center align-items-center">
        <div class="imagem-secundaria col-6 d-none d-lg-block">
          <img src="img/destaque2.jpg" alt="" class="w-75">
        </div>
        <div class="col-12 col-lg-6 ">
          <p class="text-justify">Há alguns anos, a Universidade de Stanford (EUA), realizou uma interessante experiência de psicologia social. Deixou dois carros idênticos, da mesma marca, modelo e cor, abandonados na rua. Um no Bronx, zona pobre e conflituosa de Nova York e o outro em Palo Alto, zona rica e tranquila da Califórnia. Dois carros idênticos abandonados, dois bairros com populações muito diferentes e uma equipe de especialistas em psicologia social estudando as condutas das pessoas em cada local.

              Resultado: o carro abandonado no Bronx começou a ser vandalizado em poucas horas. As rodas foram roubadas, depois o motor, os espelhos, o rádio, etc. Levaram tudo o que fosse aproveitável e aquilo que não puderam levar, destruíram. Contrariamente, o carro abandonado em Palo Alto manteve-se intacto. Só que não parou por aí...
          </p>
          <a class="btn btn-outline-secondary" href="aboutus" role="button">Leia mais</a>
        </div>
      </div>
    </article>
  </section>
  <!-- fim section destaque1-->

  <!--section caixa-destaque-2-->
  <section class="">
    <div class="caixa-destaque2">
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
              <a href="" class="btn btn-outline-secondary">Visitar</a>
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
      <div class="d-flex flex-row">
        <!--Carousel Wrapper-->
        <div id="myCarousel" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">
                
            <!--First slide-->
            <div class="carousel-item active">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{$evento->imagem}}" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h4 class="card-title">{{$evento->titulo}}</h4>
                    <p class="card-text">{{$evento->descricao}}</p>
                    <a href="#" class="btn btn-secondary">Visitar</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.First slide-->
            
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="{" alt="Imagem de capa do card">
                    <div class="card-body">
                      <h4 class="card-title"></h4>
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-secondary">Visitar</a>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/imagem1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                      <h4 class="card-title">Card 3</h4>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card
                      e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-secondary">Visitar</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/imagem1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                      <h4 class="card-title">Card 4</h4>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card
                        e fazer preencher o conteúdo do card.</p>
                        <a href="#" class="btn btn-secondary">Visitar</a>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              
            </div>
        </div>
      </article>
    </section>
    



</main>


@endsection