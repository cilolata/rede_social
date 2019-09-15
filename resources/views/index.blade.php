@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together')
@section('content')

<main class="container">

  <!-- inicio section destaque-->
  <section id="destaque" class="p-4 d-flex align-items-center">
    <article class="row">
      <div class="col-12 col-lg-6 mt-5">
        <h1 class="display-5 display-sm-1">Conecte-se com pessoas que querem mudar o mundo</h1>
        <p class="text-justify">Conecte-se pessoas que tenham interesses comuns em promover ações positivas para
          a sociedade .
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, vel! Exercitationem tenetur vel
          fuga illum iste suscipit dicta! Suscipit reprehenderit modi aliquam itaque aliquid, a sunt
          architecto maiores perferendis ratione.
        </p>
        <a class="btn btn-outline-secondary" href="aboutus" role="button">Leia mais</a>
      </div>

      <div class="imagem-principal col-6 d-none d-lg-block">
        <div class="d-flex justify-content-center">
          <img src="img/2525878.jpg" alt="lâmpada com folha" class="w-75 ml-5">
        </div>
    </article>
  </section>
  <!-- fim section destaque-->

  <!-- início section carrossel-->
  <section id="carrossel-index">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 img1  " src="img/13801.jpg" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/64967.jpg" alt="Segundo Slide">
        </div>
      </div>
    </div>
  </section>
  <!-- fim carrossel-->

  <!--inicio cards eventos -->
  <section class="container mt-5 div-card-anuncios d-none d-lg-block d-xl-block">
    <h3>Alguns dos nossos eventos</h3>
    <div class="row d-flex justify-content-around">
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
@endsection