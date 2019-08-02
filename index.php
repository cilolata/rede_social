<?php require_once("head.php"); ?>
<?php require_once("header.php"); ?>


<main class="container">
    <!-- inicio section destaque-->
    <section id=" destaque" class="p-4">
        <article class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-5 display-sm-1">Conecte-se com pessoas que querem mudar o mundo</h1>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat obcaecati sint
                    hic maiores est deleniti consectetur minima asperiores dolorum quas nulla consequatur, eligendi
                    veritatis, culpa ea iure suscipit ducimus deserunt!</p>
                <a class="btn btn-outline-success" href="about-us.php" role="button">Leia mais</a>
            </div>

            <div class="imagem-principal col-6 d-none d-lg-block">
                <div class="d-flex justify-content-center">
                    <img src="img/save.png" class="w-50 ml-5" alt="imagem mãos segurando a terra">
                </div>
        </article>
    </section>
    <!-- fim section destaque-->

    <!-- início section cadastrar-->
    <section id="cadastrar">
        <article class="d-flex align-items-center cadastrar-container">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="justify-content-center">
                    <img class="imagem2 w-50" src="img/connection.png" alt="imagem-conexão" class="img_form aling-self-center">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <h3 class="ml-3">Junte-se à nós!</h3>
                <p class="ml-3">Cadastre-se</p>
                <form class="" action="cadastro.php" method="POST">
                    <div class="form-group d-flex">
                        <label purpose="float" for="nome" class="col-sm-6 col-12">Nome:
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </label>
                        <label for="sobrenome" class="col-sm-6 col-12">Sobrenome:
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                        </label>
                    </div>
                    <div class="form-group d-flex">
                        <label for="email" class="col-sm-6 col-12">Email:
                            <input type="email" class="form-control" id="email" name="email" required>
                        </label>
                        <label for="password" class="col-sm-6 col-12">Senha:
                            <input type="password" class="form-control" id="password" name="password" required>
                        </label>
                        <button type="submit" class="btn btn-success mt-2 ml-3">Submit</button>
                    </div>
            </div>
        </article>
    </section>
    <!-- fim section cadastrar -->

    <!--começo section anuncios-->
    <section class="d-none d-lg-block d-xl-block mt-5">
        <article class="row">
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
        </article>
    </section>
    <!--fim section anuncios-->

    <!-- início section carrossel -->
    <section class="d-xl-none d-lg-none">
        <article>
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
    <!-- fim section carrossel -->

</main>

<?php require_once("footer.php"); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>