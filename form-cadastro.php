<!-- início section cadastrar-->
<section id="cadastrar">
    <div class="container-fluid row d-flex cadastrar-container align-items-center">
                
        <div class="col-lg-6 d-none d-lg-block ">
            <div class="d-flex justify-content-center ">
                <img class="imagem2" src="img/connection.png" style="width:50%" alt="imagem-conexão" class="img_form aling-self-center">
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <h3>Junte-se à nós!</h3>
            <p>Cadastre-se</p>
            <form class="" action="" method="POST">
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
                </div>
                <div class="form-group d-flex">
                    <label for="birthday" class="col-12">Nascimento:
                        <input type="date"  class="form-control col-12" id="birthday" name="birthday" required>
                    </label>
                    <div class="button ml-auto col-12" id="btnSubmitLabel">
                         <button class="btn btn-success" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
    </div>
</section>
        <!-- fim section cadastrar -->
