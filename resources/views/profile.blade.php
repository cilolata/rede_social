@extends('layouts.app')

@section('title', 'Rede Social - Seu Perfil')

@section('content')
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
@endsection