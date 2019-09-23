@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Mais Eventos')

@section('content')

    <main id="search-events" class="container">
        <section class="row">
            <h2 class="mr-auto mt-5 pb-2 ml-2">Eventos</h2>
            <article class="mr-1">
                <form action="/search" method="get">
                    <div class="input-group mt-5 mr-5">
                        <select class="custom-select" name="select_categoria" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option value="todos" selected>-- Selecione a categoria --</option>

                            @foreach ($categorias as $categoria) 
                            <option value="{{$categoria->id}}">{{$categoria->descricao}}</option> 
                            @endforeach   
                        </select>
                        <button name="botao_search" class="botao_search" type="submit" class="ml-3" class="bg-white">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </article>
        
        <article>
            <div class="card-columns">
                @foreach($eventos as $evento)
                <div class="card w-75 card-search">
                    <img src="{{$evento->imagem}}" class="card-img-top w-100" alt="imagem-evento">
                    <div class="card-body">
                        <h5 class="card-title">{{$evento->titulo}}</h5>
                        <p class="card-text">{{$evento->descricao}}</p>
                        <button class="btn btn-outline-secondary">
                            <a class="text-secondary" href="event/{{$evento->id}}">Veja mais</a>
                        </button>
                    </div>
                    
                    </div>
                    @endforeach

                </div>
            </article>
        </section>
    </main>

@endsection