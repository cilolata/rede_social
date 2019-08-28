<body>
    <!--inicio cabeçalho-->
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light shadow-sm p-3 mb-5">
            <div class="container">

                <!--cabeçalho logo e nome--->
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <img src="img/light-bulb (4).png" alt="imagem_logo" class="d-inline-block">
                    <span>Nome da Rede</span>
                </a>
                <!--fim cabeçalho logo e nome-->

                <!--menu collapse-->
                <div class="d-xl-none d-lg-none">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#signup">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="signup">
                        <form role="login" method="POST" action="">
                            <div class="form-group m-2">
                                <input class="form-control rounded" type="text" name="email" class="emailTop"
                                    placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group m-2">
                                <input class="form-control rounded" type="password" name="password" class="passwordTop"
                                    placeholder="Digite sua senha">
                            </div>
                            <button class="btn btn-success m-2" type="submit"
                                class="btn btn-default">Login</button>
                        </form>
                    </div>
                </div>
                <!--fim -menu collapse-->

                <!--inicio formulario entrar-->
                <div class="d-none d-lg-block d-xl-block">

                    <form class="navbar-form" role="login" action="valida_login.php" method="post">
                        <div class="d-flex">
                            <div class="form-inline">
                                <input class=" form-control rounded mr-lg-1 emailTop" type="text" name="email"
                                    placeholder="Digite seu e-mail">
                                <input class=" form-control rounded mr-lg-1" type="password" name="password"
                                    class="passwordTop" placeholder="Digite sua senha">
                                <button class="btn btn-outline-success ml-lg-1" type="submit"
                                    class="btn btn-default">Login</button>
                            </div>
                    </form>
                    <!--botao cadastrar-->
                    <div class="nav-item ml-4">
                        <a href="#cadastrar" class="btn btn-outline-success ml-1">
                            Cadastre-se
                        </a>
                    </div>
                    <!-- fim botao cadastrar-->
                </div>
                <!--fim formulario entrar-->
            </div>
        </nav>
    </header>
    <!--fim cabeçalho-->