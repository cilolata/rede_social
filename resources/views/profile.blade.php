@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')
@section('title', 'Together - Seu Perfil')

@section('content')

<main class="container mt-5 p-5">
  <section class="d-flex row">
    <aside class="col-lg-2 col-sm-12">
      <img src="https://i.pinimg.com/originals/b9/58/5a/b9585a9d1b20060f0d7e83c72eaa159f.jpg"
        class="rounded-circle img-profile w-75">
    </aside>

    <form class="col-lg-10 col-sm-12">
      <div class="form-row">

        <div class="col-md-4 mb-3">
          <label for="validationDefault01">Nome</label>
          <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" value="{{$usuario->name}}" required>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationDefault02">Sobrenome</label>
<<<<<<< HEAD
          <input type="text" class="form-control" id="validationDefault02" placeholder="Sobrenome"
            value="{{$usuario->sobrenome}}" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefaultUsername">Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
            </div>
            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Usuário"
              aria-describedby="inputGroupPrepend2" required>
          </div>
=======
          <input type="text" class="form-control" id="validationDefault02" placeholder="Sobrenome" value="{{$usuario->sobrenome}}" required>
>>>>>>> a3318383d3291c83becb748148c9ac0409fe0544
        </div>

      </div>
      <div class="form-row">
<<<<<<< HEAD
        <div class="col-md-3 mb-3">
          <div class="col-auto">
            <label for="CEP">CEP</label>
            <div class="input-group mb-2">
              <input type="text" class="form-control" id="CEP" maxlength="9" placeholder="CEP" required name="CEP"
                value="{{$usuario->cep}}>
            <div class=" input-group-prepend">
=======
      <div class="col-md-3 mb-3">
        <div class="col-auto">
          <label for="CEP">CEP</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="CEP" maxlength="9" placeholder="CEP" required name="CEP" value="{{$usuario->cep}}">
            <div class="input-group-prepend">
>>>>>>> a3318383d3291c83becb748148c9ac0409fe0544
              <div class="input-group-text">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
<<<<<<< HEAD
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Cidade</label>
        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
          value="{{$usuario->cidade}}" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Estado</label>
        <input type="text" class="form-control" id="UF" placeholder="Estado" required name="UF" value="{{$usuario->estado}}>
=======
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Cidade</label>
          <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
            value="{{$usuario->cidade}}" required>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Estado</label>
          <input type="text" class="form-control" id="estado" placeholder="Estado" required name="estado" value="{{$usuario->estado}}">
>>>>>>> a3318383d3291c83becb748148c9ac0409fe0544
        </div>
       
      </div>
      <div class= " form-group mt-4">
        <p>Interesses</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Ecologia
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Saúde
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Alimentação
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Animais
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Comunidade
          </label>
        </div>
      </div>
      <div class="form-group mt-5">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
            Concordo com os termos e condições
          </label>
        </div>
      </div>
      <button class="btn btn-secondary mt-4" type="submit">Enviar</button>
      </div>
    </form>
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
<script src="{{url("js/main.js")}}"></script>
@endsection