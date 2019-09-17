@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together')
@section('content')

<main class="container">

  <!-- inicio section destaque-->
  <section id="destaque" class="d-flex align-items-center">
    <article class="row">
      <div class="col-12 col-lg-6 mt-5">
        <h1 class="display-5 display-sm-1">Conecte-se com pessoas que querem mudar o mundo</h1>
        <p class="text-justify">Conecte-se pessoas que tenham interesses comuns em promover ações positivas para
          a sociedade .
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, vel! Exercitationem tenetur vel
          fuga illum iste suscipit dicta! Suscipit reprehenderit modi aliquam itaque aliquid, a sunt
          architecto maiores perferendis ratione.
        </p>
      <a class="btn btn-outline-secondary btn-md" href="{{url('register')}}" role="button">Cadastre-se</a>
      </div>
      <div class="imagem-principal col-6 d-none d-lg-block">
        <div class="d-flex justify-content-center">
          <img src="img/destaque1.jpg" alt="lâmpada com folha" class="w-75 ml-5">
        </div>
    </article>
  </section>
  
  <section id="destaque2" class="d-flex">
    <article class="row">
      <div class="d-flex justify-content-center align-items-center">
        <div class="imagem-secundaria col-6 d-none d-lg-block">
          <img src="img/destaque2.jpg" alt="" class="w-75">
        </div>
        <div class="col-12 col-lg-6 ">
          <p class="text-justify">Conecte-se pessoas que tenham interesses comuns em promover ações positivas para
            a sociedade .
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, vel! Exercitationem tenetur vel
            fuga illum iste suscipit dicta! Suscipit reprehenderit modi aliquam itaque aliquid, a sunt
            architecto maiores perferendis ratione.
          </p>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe error corrupti repellendus maxime corporis reiciendis accusantium tempore omnis minima velit,
            a vel blanditiis, nam itaque eos temporibus illum qui provident?</p>
            <a class="btn btn-outline-secondary" href="aboutus" role="button">Leia mais</a>
          </div>
        </div>
      </article>
    </section>
    <!-- fim sections destaque-->

    <!--section imagens-->

    

    <!--fim imagens-->
    
  <!--inicio cards eventos -->
  <section class="container mt-5 div-card-anuncios d-none d-lg-block d-xl-block">
    <h3>Alguns dos nossos eventos</h3>
    <div class="row d-flex justify-content-around mt-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
          <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
            do card.</p>
          <a href="#" class="card-link">Link do card</a>
          <a href="#" class="card-link">Outro link</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
          <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
            do card.</p>
          <a href="#" class="card-link">Link do card</a>
          <a href="#" class="card-link">Outro link</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
          <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card</h6>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
            do card.</p>
          <a href="#" class="card-link">Link do card</a>
          <a href="#" class="card-link">Outro link</a>
        </div>
      </div>
      <!--fim cards eventos-->


</main>


@endsection