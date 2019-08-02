<?php

require_once("head.php");
session_start();


?>


<header>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light shadow-sm p-3 mb-5">
        <div class="container">

            <!--cabeçalho logo e nome--->
            <a href="home.php" class="navbar-brand d-flex align-items-center">
                <img src="img/light-bulb (4).png" alt="imagem_logo" class="d-inline-block">
                <span>Nome da Rede</span>
            </a>
            <!--fim cabeçalho logo e nome-->

            <!--menu collapse-->

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal" class="header-paginas-internas">
                <ul class="navbar-nav list-unstyle ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link text-success">Comunidades</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-success">Mensagens</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link text-success">Eventos</a></li>
                    <li class="nav-item"><a href="perfil.php" class="nav-link text-success">Perfil</a></li>
                    <li class="nav-item"><a href="logoff.php" class="nav-link text-success">Sair</a></li>
                </ul>
            </div>
            <!--fim -menu collapse-->

            <!--inicio menu cabeçalho-->

            <div class="media">
                <img class="ml-3 rounded-circle" style="width:50px;" src="img/perfil.png"
                    alt="Imagem de exemplo genérica">
            </div>
        </div>
        <!--fim menu cabeçalho-->
    </nav>
</header>

<!--inicio main-->
<main class="container" id="main-home">

    <!--inicio section pesquisar-home-->
    <section class="pesquisar-home p-5">
        <h4 class=" paragrafo-pesquisar text-center text-capitalize font-weight-light ">Ache um grupo ou
            atividade e
            junte-se para transformar a sua comunidade</h4>
        <div class="input-group d-flex justify-content-center d-flex mt-4 div-input-home">
            <input type="text" class=" home-pesquisar input-group-text bg-white shadow-sm ml-5" id="" placeholder="Pesquisar">
            <button type="button" class="btn btn-link">
                <img src="img/search.png" class="ml-1 w-50" alt="">
            </button>
        </div>
    </section>
    <!--fim section pesquisar-->
    <section class="nichos mt-5 p-5 d-flex justify-content-around ">
    <img src="img/arvore.png" alt="">
    <img src="img/doacao-de-sangue.png" alt="">
    <img src="img/cereais.png" alt="">
    <img src="img/cao.png" alt="">
    <img src="img/friendship.png" alt="">
    </section>


    <!--inicio minhas comunidades-->
    <section class="minhas_comunidades mt-5 pt-4">
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
<?php require_once("footer.php"); ?>