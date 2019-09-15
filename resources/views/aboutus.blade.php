@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Sobre Nós')

@section('content')
    <main class="container mt-5 p-5">
        <section class="row" id="about-us">
            <h1 class="col-12">Sobre nós</h1>
            <article class="col-12 col-md-6">
                <p class="text-justify"> Somos uma Rede Social brasileira dedicada a juntar pessoas com os mesmos propósitos - criar ações em pról da sociedade. </p>
                <p class="text-justify"> Para tanto, nos baseamos numa teoria: A Teoria das Janelas quebradas. 
                <strong>Fixing Broken Windows: Restoring Order and
                    Reducing Crime in Our Communities</strong> de George L. Kelling e Catherine Coles é um livro de
                    criminologia e sociologia urbana publicado em 1996, sobre crime e estratégias para o conter ou eliminar
                    dos ambientes urbanos. O livro é baseado num artigo com o título "Broken Windows" de James Q. Wilson e
                    George L. Kelling, que surgiu em março de 1982 no The Atlantic Monthly.</p>
            </article>
            <article class="col-12 col-md-6 d-flex justify-content-center">
                <img src="img/volunteer.jpg" alt="mão com coração" class="w-75 ml-5">
            </article>
            <article class=" col-md-6 d-flex justify-content-center mt-5">
                <img src="img/2144509.jpg" alt="pessoas se ajudando" class="w-75 d-none d-md-block">
            </article>
            <article class="col-12 col-md-6 mt-5 pt-3">
                <p class="text-justify"> O título provém dos seguintes exemplos: "Considere um edifício com algumas janelas
                    quebradas. Se as janelas não forem reparadas, a tendência é que vândalos quebrem mais janelas. Após
                    algum tempo, poderão entrar no edifício e, se ele estiver desocupado, torna-se uma "ocupação" ou até
                    incendeiam o edifício. Considere também uma calçada ou passeio no qual algum lixo está acumulado, ao longo
                    do tempo, mais lixo é acumulado. No final das contas, as pessoas começam a deixar lá seus sacos de
                    lixo."</p>
                <p class="text-justify"> Uma estratégia de êxito para prevenir o vandalismo, dizem os autores do estudo, é resolver os
                    problemas quando eles são pequenos. Reparar as janelas quebradas em pouco tempo, dizem os autores, e
                    ver-se-á que os vândalos terão menos probabilidade de estragar mais. Limpar os passeios e a tendência
                    será de o lixo não acumular. Assim como outras ações sociais: cuidar de praças, animais, incentivar projetos esportivos e/ou artísticos na comunidade.</p>
            </article>
        </section>
    </main>
@endsection