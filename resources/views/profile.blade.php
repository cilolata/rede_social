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
        <img  src="{{auth()->user()->imagem}}"
            class="img-perfil rounded-circle img-profile">
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
              <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{auth()->user()->name}}">
            </div>

            <div class="col-md-4 mb-3">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"
                value="{{auth()->user()->sobrenome}}" >
            </div>

            <div class="col-md-3 mb-2">
              <label for="CEP">CEP</label>
              <input type="text" class="form-control" id="CEP" maxlength="9" placeholder="CEP" name="CEP"
                value="{{auth()->user()->CEP}}">
            </div>

            <div class="col-md-3 mb-2">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" id="UF" placeholder="Estado" required name="estado"
                value="{{auth()->user()->Estado}}">
            </div>

            <div class="col-md-3 mb-2">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                value="{{auth()->user()->cidade}}">
            </div>
          </div>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> 
            <button class="btn btn-outline-secondary mt-4" type="submit">Salvar</button>
            {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}">  --}}
            <button class="btn btn-outline-danger mt-4 ml-2" type="submit">Excluir Perfil</button>

          </div>
      
        </div>
      </div>
    </form>
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