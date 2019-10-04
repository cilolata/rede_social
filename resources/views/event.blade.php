@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Evento')

@section('content')

<main id="event" class="container">
    <!-- inicio section event-->

    <section class="row event">
        <article class="event-body col-lg-8 col-12 mr-5 ">

            <div class="event-about">
                <div class="top-image-area">
                    <img class="img-fluid event-image w-100" src="{{ url($eventos->imagem)}}" alt="random-image">
                </div>
                <div class="content">
                    <div class="first">
                        <div class="inner">
                            <h3 class="mt-3">{{ $eventos->titulo }}</h3>
                            <p>{{ $eventos->descricao }}</p>
                        </div>
                        <hr>
                    </div>
                    <div class="event-info">
                        <div class="wrap">
                            <i class="fa fa-calendar-alt d-inline-flex mr-1"></i>
                            <h5 class="d-inline-flex">{{ date('d-m-Y', strtotime($eventos->dataEvento)) }}</h5>
                            <div>
                                <i class="fa fa-clock-o d-inline-flex mr-1"></i>
                                <h5 class="d-inline-flex"> {{ $eventos->inicioEvento }} às {{$eventos->fimEvento }}</h5>
                            </div>

                        </div>
                        <div class="wrap">
                            <i class="fa fa-map-marker d-inline-flex mr-1"></i>
                            <h5 class="d-inline-flex"> {{ $eventos->endereco }}, {{ $eventos->cidade }} - {{ $eventos->estado }}</h5>
                        </div>
                        <div class="wrap">
                            <i class="far fa-comment d-inline-flex mr-1"></i>
                            <h5 class="d-inline-flex">{{ $eventos->categorias->descricao }}</h5>
                        </div>
                        <hr>
                    </div>
                    <div class="event-organizer">
                        <div class="img-cropper">
                            <img class="rounded-circle img-profile" height="60" width="60"
                                src="{{ url($criadorEvento->imagem)}}" alt="user-image">
                        </div>
                        <div class="user">
                            <a href="#"></a>
                            <p class="mt-1">Organizador(a): {{$criadorEvento->name}}</p>
                        </div>
                        <form class="mt-5" method="GET" action="/event/{id}" enctype="multipart/form-data">
                            <div class="d-flex justify-content-end">
                                <input type="hidden" name="evento_id" value="{{$eventos->id}}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <button class="btn btn-outline-dark" type="submit">
                                    Participar!
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="img-cropper">
                    @foreach ($participantes as $participante)
                    <img class="rounded-circle img-profile" height="60" width="60" src="{{ url($participante->fk_user->imagem)}}" alt="user-image"> 
                    @endforeach
                </div>
            </div>
        </article>

        <article class="col-3 side-bar d-none d-lg-block d-xl-block">
            <div class="other-events">
                @foreach ($todosEventos as $evento)
                @if ($evento->fk_categorias == $eventos->fk_categorias)
                <div class="other-events-sample d-flex">
                    <ul class="list-unstyled">
                        <li class="media border-bottom pb-2">
                            <img  src="{{ url($evento->imagem)}}" width="100px;" height="80px;" class="mr-1 align-self-center" alt="foto-evento">
                            <div class="media-body">
                            <a href="/event/{{$evento->id}}"> {{ $evento->titulo }}</a>
                                <p class="mb-0">{{ $evento->descricao }} </p>
                                <a href="/event/{{$evento->id}}">Veja mais</a>
                            </div>
                        </li>
                    </ul>
                    @endif
                </div>
                @endforeach
            </div>
        </article>

    </section>

</main>



@endsection