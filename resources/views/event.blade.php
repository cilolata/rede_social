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
                                <i class="fa fa-clock-o d-inline-flex mr-1"></i>
                                <h5 class="d-inline-flex">{{ $eventos->dataEvento }}</h5>
                            </div>
                            <div class="wrap">
                                <i class="fa fa-map-marker d-inline-flex mr-1"></i>
                                <h5 class="d-inline-flex">{{ $eventos->cidade }}</h5>
                            </div>
                            <div class="wrap">
                                <i class="fa fa-globe d-inline-flex mr-1"></i>                                    
                                <h5 class="d-inline-flex">{{$eventos->fk_categorias}}</h5>
                            </div>
                            <hr>
                        </div>
                        <div class="event-organizer">
                            <div class="img-cropper">
                            <img class="ml-3 rounded-circle" style="width:100px;" src="" alt="user-image">
                            </div>
                            <div class="user">
                                <a href="#">{{ $eventos->fk_users }}</a>
                                <p>Organizador(a)</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-secondary">
                                    Participar!
                                </button>
                            </div>
                    </div>
                </div>
            </article>
    
            <article class="col-3 side-bar d-none d-lg-block d-xl-block">
                <div class="other-events">
                    <h5>Eventos relacionados</h5>
                    <div class="other-events-body">
                        <div class="other-events-sample d-flex">
                            <ul class="list-unstyled">
                                <li class="media border-bottom pb-2">
                                    <img class="mr-1 align-self-center" src="https://source.unsplash.com/random/60x60" alt="foto do evento">
                                    <div class="media-body">
                                        <a href="#" class=>Nome do Evento</a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <a href="#">Veja mais</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="other-events-sample d-flex">
                            <ul class="list-unstyled">
                                <li class="media border-bottom pb-2">
                                    <img class="mr-1 align-self-center" src="https://source.unsplash.com/random/60x60" alt="foto do evento">
                                    <div class="media-body">
                                        <a href="#" class=>Nome do Evento</a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <a href="#">Veja mais</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="other-events-sample d-flex">
                            <ul class="list-unstyled">
                                <li class="media border-bottom pb-2">
                                    <img class="mr-1 align-self-center" src="https://source.unsplash.com/random/60x60" alt="foto do evento">
                                    <div class="media-body">
                                        <a href="#" class=>Nome do Evento</a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <a href="#">Veja mais</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="other-events-sample d-flex">
                            <ul class="list-unstyled">
                                <li class="media border-bottom pb-2">
                                    <img class="mr-1 align-self-center" src="https://source.unsplash.com/random/60x60" alt="foto do evento">
                                    <div class="media-body">
                                        <a href="#" class=>Nome do Evento</a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <a href="#">Veja mais</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="other-events-sample d-flex">
                            <ul class="list-unstyled">
                                <li class="media border-bottom pb-2">
                                    <img class="mr-1 align-self-center" src="https://source.unsplash.com/random/60x60" alt="foto do evento">
                                    <div class="media-body">
                                        <a href="#" class=>Nome do Evento</a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <a href="#">Veja mais</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
    
        </section>
    
    </main>


@endsection