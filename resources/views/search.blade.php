@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Mais Eventos')

@section('content')

    <main id="search-events" class="container">
        <section class="row">
            <h2 class="mr-auto mt-5 ml-4">Eventos</h2>
            <article class="mr-1">
                <div class="input-group mt-5 mr-5">
                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option value="">-- Selecione a categoria --</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>   
                            @endforeach
                    </select>
                </div>
                </div>
            </article>

            <article>
                <div class="card-columns">
                    @foreach($eventos as $evento)
                    <div class="card">
                        <img src="{{$evento->imagem}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$evento->titulo}}</h5>
                            <p class="card-text">{{$evento->descricao}}</p>
                            <button class="btn btn-outline-secondary">
                                <a href="event/{{$evento->id}}">Veja mais</a>
                            </button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </article>
        </section>
    </main>

@endsection