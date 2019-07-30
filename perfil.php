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
        <main class="container ml-5 row">

        <aside class="col-md-6">
        <img src="img/perfil.png" style="width:100px;">

        </aside>


        <section class="ml-5 col-md-6">

         <form action="">

        <fieldset>
        <legend>Personal information:</legend>
        <label for=""> Primeiro nome</label>
        <input type="text">
        <label for="">Sobrenome</label>
        <input type="text">
        <label for="">País</label>
        <input type="text">
        <label for="">Estado</label>
        <input type="text">
        <label for="">Cidade</label>
        <input type="text">
        <label for="">Interesses</label>
        <input type="text-area" >

         
        </fieldset>
         
         
         
         
         
         </form>
         
         
         
         
         </section>

        </main>

        <?php require_once("footer.php"); ?>