@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Mais Eventos')

@section('content')

<main id="search-events" class="container">
    <section class="row">
        <h1 class="mr-auto mt-5">Eventos</h1>
        <article class="mr-1">
            <div class="input-group mt-5">
                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Categorias</option>
                    <option value="1">Ecologia</option>
                    <option value="2">Saúde</option>
                    <option value="3">Alimentação</option>
                    <option value="3">Animais</option>
                    <option value="3">Cidadania</option>

                </select>
            </div>
            </div>
        </article>

        <article>
            <div class="card-columns">

                <div class="card">
                    <img src="https://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 01</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempora,
                            suscipit, aliquid dolorum molestias ad sunt amet aliquam in aspernatur unde placeat quis
                            natus similique eius magni ut rem id.</p>
                        <button class="btn btn-outline-secondary">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="http://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 02</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <button class="btn btn-outline-secondary
                            ">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="https://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 03</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fugit
                            soluta, asperiores distinctio amet debitis reiciendis nobis ipsam! Quisquam numquam earum
                            laboriosam ullam magni expedita vero asperiores enim eligendi consequuntur? Lorem ipsum
                            dolor sit amet consectetur adipisicing elit.</p>
                        <button class="btn btn-outline-secondary
                            ">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="http://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 04</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                            voluptatem suscipit quaerat tenetur, id nobis et fugit a totam fugiat similique architecto
                            adipisci soluta, aperiam, facilis maiores consectetur sapiente repellat?</p>
                        <button class="btn btn-outline-secondary
                            ">Veja mais</button>
                    </div>
                </div>


                <div class="card">
                    <img src="https://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 05</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam qui
                            distinctio libero mollitia quidem ut laudantium, velit, et eum quas harum praesentium dolor
                            esse doloribus ducimus excepturi dolores nam! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Possimus, error amet. Iste illum sequi iure quod neque exercitationem at
                            eligendi. Incidunt obcaecati in eum tenetur harum maxime voluptatem sequi deleniti!</p>
                        <button class="btn btn-outline-secondary
                            ">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="http://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 06</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quam
                            corporis consequatur expedita voluptates reprehenderit qui eum pariatur rerum voluptatem.
                        </p>
                        <button class="btn btn-outline-secondary">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="https://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 07</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam saepe,
                            rem eligendi, iste ipsum distinctio nam ducimus dicta facilis temporibus ad dolores
                            deserunt? Vero sit perspiciatis, deleniti magnam odit officiis! Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.</p>
                        <button class="btn btn-outline-secondary">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="http://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 08</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <button class="btn btn-outline-secondary">Veja mais</button>
                    </div>
                </div>

                <div class="card">
                    <img src="http://source.unsplash.com/random/210x160" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card 09</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae doloremque
                            laudantium fugiat nostrum sunt enim suscipit veniam? Dolore, dignissimos. Velit, distinctio
                            praesentium fugiat minus nulla assumenda qui autem ut aliquam.</p>
                        <button class="btn btn-outline-secondary">Veja mais</button>
                    </div>
                </div>

            </div>
        </article>
    </section>
</main>
@endsection