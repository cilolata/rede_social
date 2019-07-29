
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
                <div class="dropdown d-xl-none d-lg-none">
                    <button class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" type="button"> Sign up </button>
                    <div class="dropdown-menu">

                    
                        <form class="px-4 py-3" role="login" method="POST" action="">
                            <div class="form-group m-1">
                                <input class="form-control rounded" type="text" name="email" class="emailTop" placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group m-1">
                                <input class="form-control rounded" type="password" name="password" class="passwordTop" placeholder="Digite sua senha">
                            </div>
                            <button class="btn btn-outline-success m-1" type="submit" class="btn btn-default">Login</button>
                        </form>
                        <div class="dropdown-divider">
                            <a class="dropdown-item" href="form-cadastro.php">Novo por aqui? Cadastre-se!</a>
                            <a class="dropdown-item" href="#"> Esqueceu a senha?</a>
                        </div>
                    </div>
                </div>
                <!--fim -menu collapse-->

                <!--inicio formulario entrar-->
                <div class="d-none d-lg-block d-xl-block">

                    <form class="navbar-form" role="login" action="valida_login.php" method="post">
                        <div class="d-flex">
                            <div class="form-inline">
                                <input class=" form-control rounded mr-lg-1 emailTop" type="text" name="email"placeholder="Digite seu e-mail">
                                <input class=" form-control rounded mr-lg-1" type="password" name="password" class="passwordTop" placeholder="Digite sua senha">
                                <button class="btn btn-outline-success ml-lg-1" type="submit" class="btn btn-default">Login</button>
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