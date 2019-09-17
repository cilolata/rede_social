@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')
@section('title', 'Together - Seu Perfil')

@section('content')

<main class="container mt-5 p-5">
  <section class="d-flex row">
    <form method="POST" action="/alterarUsuario" enctype="multipart/form-data">

      @csrf
      {{ method_field('POST') }}

      <div class="form-row">
        <aside class="col-lg-2 col-sm-12">
          <img src="https://i.pinimg.com/originals/b9/58/5a/b9585a9d1b20060f0d7e83c72eaa159f.jpg"
            class="rounded-circle img-profile w-75">
          <input type="file" class="mt-3" id="imagem" name="imagem"
            class="form-control @error('imagem') is-invalid @enderror" name="imagem" value="{{ old('imagem') }}"
            required autocomplete="imagem" autofocus>

          @error('imagem')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </aside>

        <div class="col-12 mt-4">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="name">Nome</label>
              <input type="text" class="form-control" id="name" placeholder="Nome" value="{{$usuario->name}}" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome"
                value="{{$usuario->sobrenome}}" required>
            </div>

            <div class="col-md-3 mb-2">
              <label for="CEP">CEP</label>
              <input type="text" class="form-control" id="CEP" maxlength="9" placeholder="CEP" required name="CEP"
                value="{{$usuario->cep}}">
            </div>

            <div class="col-md-3 mb-2">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" id="UF" placeholder="Estado" required name="estado"
                value="{{$usuario->estado}}">
            </div>

            <div class="col-md-3 mb-2">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                value="{{$usuario->cidade}}" required>
            </div>
          </div>
            <button class="btn btn-secondary mt-4" type="submit">Enviar</button>

          </div>
        </div>
      </div>
    </form>
  </section>
</main>


@endsection