<?php require_once("head.php"); ?>

<?php 

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
            
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav list-unstyle ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link text-success">Comunidades</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-success">Mensagens</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link text-success">Eventos</a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link text-success">Voltar</a></li>
                    <li class="nav-item"><a href="logoff.php" class="nav-link text-success">Sair</a></li>
                </ul>
            </div>
            <!--fim -menu collapse-->

            <!--inicio menu cabeçalho-->

            <div class="media">
                <img class="ml-3 rounded-circle" style="width:50px;" src="img/perfil.png" alt="Imagem de exemplo genérica">
            </div>
        </div>
        <!--fim menu cabeçalho-->
    </nav>
</header>
<main class="container">

    <section class="row">
        <div>

            <aside class="col-lg-2 col-sm-12">
                <img src="img/perfil.png" class="rounded-circle"style="width:100px;">
            </aside>
            <form class="col-lg-10 col-sm-12">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="">Sobrenome</label>
                    <input type="text" class="form-control" id="" placeholder="Digite seu Sobrenome">
                </div>
            
        
                <div class="form-group">
                    <label for="1">País</label>
                        <select name=”país”>
                            <option value=”Argentina”>Argentina</option>
                            <option value=”Brasil”>Brasil</option>
                            <option value=”Colombia”>Colômbia</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="1">Estado</label>
                        <select id="estado" name="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>

                </div>
                <div class="form-group">
                    <label for="">Cidade</label>
                    <input type="text" class="form-control" id="" placeholder="Digite a sua Cidade">
                </div>
                <div class="form-group">
                    <label for="">Interesses</label>
                        <select name=”país”>
                            <option value=”Animais”>Animais</option>
                            <option value=”Cidadania”>Cidadania</option>
                            <option value=”Educação”>Educação</option>
                            <option value="Esportes">Esportes</option>
                            <option value=”Ecologia”>Ecologia</option>
                        </select>
                </div>

                </form>
        </div>
    </section>

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

<?php require_once("footer.php"); ?>