<body>
    <!--inicio cabeçalho-->
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light shadow-sm p-3 mb-5">
            <div class="container">

                <!--cabeçalho logo e nome--->
                <a href="index.php" class="navbar-brand">
                    <img src="img/light-bulb (4).png" alt="imagem_logo" class="d-inline-block">
                    Nome da Rede
                </a>
                <!--fim cabeçalho logo e nome-->

                <!--menu collapse-->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#cadastro_navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--fim -menu collapse-->

                <!--inicio formulario entrar-->
                <form class="navbar-form" role="login">
                    <div class="d-flex">
                        <div class="form-inline">
                            <input class=" form-control rounded mr-1" type="text" name="email" id="emailTop" placeholder="Digite seu e-mail">
                            <input class=" form-control rounded" type="password" name="password" id="passwordTop" placeholder="Digite sua senha">
                            <button class="btn btn-outline-success ml-1" type="submit" class="btn btn-default">Login</button>
                        </div>
                </form>
                <!--fim formulario entrar-->

                <!--botao cadastrar-->
                <div class="collapse navbar-collapse" id="nav-principal">
                    <div class="nav-item">
                        <a href="#cadastrar" class="btn btn-outline-success ml-1">
                            Cadastre-se
                        </a>
                    </div>
                </div>
            </div>
            <!-- fim botao cadastrar-->
            </div>
        </nav>
    </header>
    <!--fim cabeçalho-->