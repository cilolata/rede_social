<?php require_once("head.php"); ?>

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
					<li class="nav-item"><a href="perfil.php" class="nav-link text-success">Perfil</a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link text-success">Home</a></li>
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


<main id="event" class="container">
    <!-- inicio section event-->
    <section class="row d-none d-lg-block d-xl-block">
        <article class="box side-bar">
            <div class="user-info">
                <div class="img-cropper">
                    <img src="img/perfil.png" alt="user-image" class="h-100">
                </div>
                <div class="extra-info">
                    <h5> Nome do usuário </h5>
                </div>
            </div>
            <hr>
            <div class="category-wrapper">
                <ul>
                    <li>
                        <a href="#">Página Inicial</a>
                    </li>
                    <li>
                        <a href="#">Eventos</a>
                    </li>
                </ul>
            </div>
            <hr>
        </article>
    </section>

    <section class="row box main">
	    <article class="content">

			<div class="first task-box">
				<div class="top-image-area">
					<img src="https://www.natgeokids.com/wp-content/uploads/2017/06/Ocean-facts-7-1.jpg" alt="rocks-and-ocean">
				</div>
				<div class="wrap-content">
					<div class="first">
						<div class="inner" style="height:105px;">
							<h3>Título do evento</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quia. Quibusdam nesciunt sequi corrupti odio cum, ipsa neque harum. Quasi ullam nesciunt consequatur repudiandae quis est nam blanditiis, dolorem suscipit?</p>
						</div>
						<hr>
					</div>
					<div class="second">
						<div class="wrap">
						    <i class="fa fa-clock-o" aria-hidden="true"></i>
							<h5>Sexta, 17 de Agosto | 08:00 AM - 04:00 PM </h5>
						</div>
						<div class="wrap">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<h5>São Paulo, SP, Brasil</h5>
						</div>
						<div class="wrap">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<h5>Tipo de Evento</h5>
						</div>
						<hr>
					</div>
					<div class="third">
						<div class="img-cropper">
							<img src="https://i.pinimg.com/originals/b9/58/5a/b9585a9d1b20060f0d7e83c72eaa159f.jpg" alt="user-image">
						</div>
						<div class="user">
						    <h5>Jannette Blue</h5>
						    <h5>Organizador(a)</h5>
						</div>
				</div>
			</div>
        </article>
    </section>
</main>