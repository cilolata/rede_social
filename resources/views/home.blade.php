@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Home')

@section('content')
<main class="container" id="main-home">

    <!--inicio section pesquisar-home-->
    <section class="pesquisar-home p-5">
        <div class="row d-flex justify-content-center">
            <h4 class="paragrafo-pesquisar text-center text-capitalize font-weight-light p-5 mt-5 d-none d-lg-block">Ache um
                grupo ou
                atividade e junte-se para transformar a sua comunidade</h4>
                <form class="home-pesquisar form-group">
                    <input type="text" class="form-control input-pesquisar tex-align-center shadow-sm" aria-label="pesquisar-area" placeholder="Pesquisar Eventos">
                    <button type="submit" class="icon-pesquisar"><i class="fas fa-search"></i></button>
                </form>
        </div>
    </section>
    
    <!--fim section pesquisar-->
    <section class="nichos mt-1 p-5 d-lg-flex d-none justify-content-around flex-wrap">
        <img class="mt-3 d-none d-lg-block" src="img/arvore.png" alt="ecologia" title="ecologia">
        <img class="mt-3 d-none d-lg-block" src="img/doacao-de-sangue.png" alt="saúde" title="saúde">
        <img class="mt-3 d-none d-lg-block" src="img/cereais.png" alt="alimentação" title="alimentação">
        <img class="mt-3 d-none d-lg-block" src="img/cao.png" alt="animais" title="animais">
        <img class="mt-3 d-none d-lg-block" src="img/friendship.png" alt="cidadania" title="cidadania">
    </section>

    <!--inicio meus eventos-->
    <h4>Meus Eventos</h4>
    <div class="card meus-eventos mt-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

</main>
@endsection