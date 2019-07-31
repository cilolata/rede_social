<?php require_once("head.php"); ?>

<?php 

session_start();

?>

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

            <!--fim -menu collapse-->

            <!--inicio menu cabeçalho-->
            <div class="media">
                <div class="d-none d-lg-block d-xl-block">
                    <span class="mr-3"><a class="text-success" href="">Comunidades</a></span>
                    <span class="mr-3"><a class="text-success" href=""> Mensagens</a></span>
                    <span class="mr-3"><a href="home.php" class="text-success" href="">Voltar</a></span>
                    <span class="mr-3"><a href="logoff.php" class="text-success" href="">Sair</a></span>
                    <!--botao cadastrar-->
                    <img class="ml-3" style="width:50px;" src="img/perfil.png" alt="Imagem de exemplo genérica">
                </div>
            </div>
        </div>
        <!--fim menu cabeçalho-->
</header>
<!--inicio main-->
<main class="container">


</main>
    <section class="container">
    <div class="row">

    <aside class="col-lg-2 col-sm-12">
        <img src="img/perfil.png" style="width:100px;">
    </aside>
        <form class="col-lg-10 col-sm-12">
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" id="" aria-describedby=""
                    placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="">Sobrenome</label>
                <input type="text" class="form-control" id="" placeholder="Digite seu Sobrenome">
            </div>
            <div class="form-group">
                <label for="1">País</label>
                <input type="text" class="form-control" id="" placeholder="Digite o seu País">
            </div>
            <div class="form-group">
                <label for="1">Estado</label>
                <input type="text" class="form-control" id="" placeholder="Digite o seu Estado">
            </div>
            <div class="form-group">
                <label for="">Cidade</label>
                <input type="text" class="form-control" id="" placeholder="Digite a sua Cidade">
            </div>
            <div class="form-group">
                <label for="">Interesses</label>
                <input type="text" class="form-control" id="" placeholder="Digite o seus Interesses">
            </div>
            
            <button type="submit" class="btn btn-success  mt-2">Submit</button>
        </form>
    </div>
    </section>

<?php require_once("footer.php"); ?>