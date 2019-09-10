@extends('layouts.master')

@section('title', 'Together - Evento')

@section('content')

<main class="container">

    <h2 class="mt-5 pt-5">Informações necessárias</h2>
    <h3>Insira as seguintes informações para criar seu evento.</h3>
    <form class="mt-5">
        <div class="form-group">
            <label for="">Foto do evento</label>
            <input type="file" class="form-control-file" id="FotoEvento">
        </div>
        <div class="form-group">
            <label for="inputNomeEvento">Nome do Evento</label>
            <input class="form-control" type="text" placeholder="Digite um nome para o seu evento">
        </div>


        <div class="form-group">
            <label for="inputEndereco">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco" placeholder="Digite o endereço do evento">
        </div>

        <div class="form-group ">
            <label for="inputCidade">Cidade</label>
            <input type="text" class="form-control" id="inputCidade" placeholder="Digite a cidade do evento">
        </div>
        <div class="form-group ">
            <label for="inputEstado">Estado</label>
            <input type="text" class="form-control" id="inputEstado" placeholder="Digite o estado do evento">
        </div>
        <div class="form-group ">
            <label for="">Escolha uma categoria</label>
            <select class="form-control form-control-sm">
                <option>Escolha uma categoria</option>
            </select>
        </div>
        <div class="form-group">
        
                <div class="form-group d-flex flex-column">

                    <label for="inputData">Data</label>
                    <input type="date" class="form-control col-2" id="data">
                </div>
               
                <div class="row mt-3 ml-1">

                    <div class=" d-flex flex-column">
                        <label for="inputHorarioInicio" class="mr-2">Horário de inicio</label>
                        <input type="time" class="form-control-sm mr-2" id="nputHorarioInicio">
                    </div>
                    <div class=" d-flex flex-column">
                        <label for="inputHorarioTermino" class="mr-2">Horário de término</label>
                        <input type="time" class="form-control-sm mr-2" id="inputHorarioTermino">
                    </div>
            </div>
      
        <div class="form-group mt-2">
            <label for="exampleFormControlTextarea1">Descrição do evento</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-outline-secondary mt-4" type="submit">Criar</button>
    </form>








</main>