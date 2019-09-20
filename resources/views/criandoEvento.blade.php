@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Evento')

@section('content')

<main class="container">

    <h2 class="mt-5 pt-5">Informações necessárias</h2>
    <h3>Insira as seguintes informações para criar seu evento.</h3>
    <form class="mt-5" method="post" action="/criandoEvento" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}

        <div class="form-group">
            <label for="name">Organizador(a)</label>
            <div class="input-group">
                <input type="text" class="col-md-6 form-control mr-3 " id="name" placeholder="Nome" value="{{$usuario->name}}">
                <input type="text" class="col-md-6 form-control" id="sobrenome" placeholder="Nome" value="{{$usuario->sobrenome}}">
            </div>
        </div>
        
        <div class="form-group">
            <label for="">Foto do evento</label>
            <input name="imagem" type="file" class="form-control-file" id="FotoEvento">
        </div>
        <div class="form-group">
            <label for="inputNomeEvento">Nome do Evento</label>
            <input name="titulo" class="form-control" type="text" placeholder="Digite um nome para o seu evento">
        </div>

        <div class="form-group">
            <label for="CEP">CEP</label>
            <input type="text" class="form-control" id="CEP" maxlength="9" placeholder=" Digite o CEP do evento" required name="CEP">
        </div>


        <div class="form-group">
            <label for="inputEndereco">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Digite o endereço do evento">
        </div>

        <div class="form-group ">
            <label for="inputCidade">Cidade</label>
            <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Digite a cidade do evento">
        </div>
        <div class="form-group ">
            <label for="inputEstado">Estado</label>
            <input name="estado" type="text" class="form-control" id="estado" placeholder="Digite o estado do evento">
        </div>
        <div class="form-group ">
            <label for="">Escolha uma categoria</label>
            <select class="form-control form-control-sm" name="categorias" id="categorias">
                <option value="">-- Selecione a categoria --</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>   
                @endforeach
            </select>
        </div>
        <div class="form-group">
        
                <div class="form-group d-flex flex-column">

                    <label for="inputData">Data</label>
                    <input name="dataEvento" type="date" class="form-control col-lg-3 col-sm-12" id="data">
                </div>
               
                <div class="row mt-3 ml-1">

                    <div class=" d-flex flex-column">
                        <label for="inputHorarioInicio" class="mr-2">Horário de inicio</label>
                        <input name="inicioEvento" type="time" class="form-control-sm mr-2" id="nputHorarioInicio">
                    </div>
                    <div class=" d-flex flex-column">
                        <label for="inputHorarioTermino" class="mr-2">Horário de término</label>
                        <input name="fimEvento" type="time" class="form-control-sm mr-2" id="inputHorarioTermino">
                    </div>
            </div>
      
        <div class="form-group mt-2">
            <label for="exampleFormControlTextarea1">Descrição do evento</label>
            <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-outline-secondary mt-4" type="submit">Criar</button>
    </form>

</main>



@endsection