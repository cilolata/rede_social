@extends('layouts.master')

@section('title', 'Rede Social - Home')

@section('content')
    <main class="container" id="main-home">
    
        <!--inicio section pesquisar-home-->
        <section class="pesquisar-home p-5">
            <h4 class="paragrafo-pesquisar text-center text-capitalize font-weight-light p-5 mt-5 d-none d-lg-block">Ache um grupo ou
                atividade e junte-se para transformar a sua comunidade</h4>
            <div class="input-group d-flex justify-content-center mt-4 div-input-home">
                <input type="text" class="home-pesquisar input-group-text bg-white shadow-sm" id="" placeholder="Pesquisar atividades">
                <button type="button" class="btn btn-link">
                    <img src="img/search.png" class="ml-1 w-50" alt="">
                </button>
            </div>
        </section>
        <!--fim section pesquisar-->
        <section class="nichos mt-1 p-5 d-flex justify-content-around flex-wrap">
            <img class="mt-3 d-none d-lg-block" src="img/arvore.png" alt="ecologia" title="ecologia">
            <img class="mt-3 d-none d-lg-block" src="img/doacao-de-sangue.png" alt="saúde" title="saúde">
            <img class="mt-3 d-none d-lg-block" src="img/cereais.png" alt="alimentação" title="alimentação">
            <img class="mt-3 d-none d-lg-block" src="img/cao.png" alt="animais" title="animais">
            <img class="mt-3 d-none d-lg-block" src="img/friendship.png" alt="cidadania" title="cidadania">
        </section>
        
        <!--inicio minhas comunidades-->
        <section class="minhas_comunidades mt-5 pt-4 d-none d-lg-block d-xl-block">
            <h5 class="text-success"> Minhas Comunidades</h5>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                    <div class="card d-block">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-success">Visitar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                    <div class="card d-block">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-success">Visitar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                    <div class="card d-block">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-success">Visitar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 cardAnuncioCont">
                    <div class="card d-block">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer
                                preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-success">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- inicio carousel -->
        <section class="d-xl-none d-lg-none">
            <article>
                <h5 class="text-success"> Minhas Comunidades</h5>
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
                                        <img class="card-img-top" src="img/imagem1.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <h4 class="card-title">Card 1</h4>
                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card
                                                e fazer preencher o conteúdo do card.</p>
                                            <a href="#" class="btn btn-success">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->
    
                            <!--Second slide-->
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="img/imagem1.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <h4 class="card-title">Card 2</h4>
                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card
                                                e fazer preencher o conteúdo do card.</p>
                                            <a href="#" class="btn btn-success">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
    
                            <!--Third slide-->
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="img/imagem1.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <h4 class="card-title">Card 3</h4>
                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card
                                                e fazer preencher o conteúdo do card.</p>
                                            <a href="#" class="btn btn-success">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Third slide-->
    
                            <!--Fourth slide-->
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="img/imagem1.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <h4 class="card-title">Card 4</h4>
                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card
                                                e fazer preencher o conteúdo do card.</p>
                                            <a href="#" class="btn btn-success">Visitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Fourth slide-->
    
                        </div>
                        <!--/.Slides-->
    
                    </div>
                    <!--/.Carousel Wrapper-->
    
                </div>
            </article>
        </section>
    
    </main>
    <!--inicio main-->
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
