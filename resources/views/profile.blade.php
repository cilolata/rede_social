@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')
@section('title', 'Together - Seu Perfil')

@section('content')

<main class="container mt-5 p-5">
  <section class="d-flex row">
    <form method="POST" action="/profile/{id}" enctype="multipart/form-data">

      @csrf
      {{ method_field('POST') }}

      <div class="form-row">
        <aside class="col-lg-2 col-sm-12">
          <img src=" {{ url($usuario->imagem)}}" class="img-perfil">
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
              <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                value="{{auth()->user()->name}}">
            </div>

            <div class="col-md-4 mb-3">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"
                value="{{auth()->user()->sobrenome}}">
            </div>
            <div class="col-md-3 mb-2">
              <label for="endereco">Email</label>
              <input type="text" class="form-control" id="CEP" maxlength="9" placeholder="email" name="email"
                value="{{auth()->user()->email}}">
            </div>
            <div class="col-md-3 mb-2">
              <label for="CEP">CEP</label>
              <input type="text" class="form-control" id="CEP" maxlength="9" placeholder="CEP" name="CEP"
                value="{{auth()->user()->CEP}}">
            </div>

            <div class="col-md-3 mb-2">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" id="UF" placeholder="Estado" required name="estado"
                value="{{auth()->user()->estado}}">
            </div>

            <div class="col-md-3 mb-2">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                value="{{auth()->user()->cidade}}">
            </div>
          </div>
          <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
          <button class="btn btn-outline-secondary mt-4" type="submit">Salvar</button>
          <button class="btn btn-outline-danger mt-4 ml-2" data-toggle="modal" onclick="event.preventDefault()"
            data-target="#modalExemplo{{auth()->user()->id}}">Excluir Perfil</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalExemplo{{auth()->user()->id}}" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">{{ auth()->user()->name }} Tem certeza que
                  você quer deletar seu perfil?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Saiba que quando você deletar o seu perfil seus eventos também serão deletados.
              </div>

    </form>
              <div class="modal-footer">
              <form action="/profile/{{auth()->user()->id}}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>'
  </section>
</main>
@if(count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif



@endsection