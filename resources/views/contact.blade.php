@extends('layouts.app')

@section('title', 'Rede Social')

@section('content')
    <main>
        <section id="contact-us">
            <article class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 contact">
                        <div>
                            <h1 class="display-5 display-sm-1">Fale conosco!</h1>
                            <p class="text-justify">A ideia deste site é conectar pessoas, em suas comunidades, que tenham interesses comuns em promover melhorias no entorno destas. Assim, temos algumas propostas listadas, tais como: cuidar de animais, de limpezas de praças, se envolver com propostas educacionais, culturais, artísticas ou esportivas em sua comunidade. </p>
                        </div>
                    </div>

                    <!-- inicio form fale conosco -->
                    <div class="col-12 col-lg-6 contact">
                        <form class="" action="" method="POST">
                            <div class="form-group">
                                <div class="form-group d-flex">
                                    <label for="nome" class="col-sm-6 col-12">Nome:
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </label>
                                    <label for="email" class="col-sm-6 col-12">Email:
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </label>
                                </div>
                                <div class="form-group mx-3">
                                    <label for="textArea">No que podemos te ajudar?</label>
                                    <textarea class="form-control" id="textArea" rows="5"
                                        placeholder="Deixe sua dúvida aqui..."></textarea>
                                </div>
                                <div class="button col-12" id="btnSubmitLabel">
                                    <button class="btn btn-outline-success" type="submit">Enviar!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- fim form fale conosco -->

                    <!-- inicio faq -->
                    <div class="panel-group my-5 col-12" id="faqAccordion">
                        <h1>Perguntas mais frequentes:</h1>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question0">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Question 01?</a>
                                </h4>

                            </div>
                            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sint accusamus nam
                                        libero, itaque impedit delectus illum repellat ipsam rerum laboriosam facere
                                        obcaecati in, alias vitae facilis laudantium debitis repellendus?
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question1">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Question 02?</a>
                                </h4>

                            </div>
                            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ex nam assumenda
                                        ullam labore. Pariatur nihil at nesciunt deleniti qui neque ab, animi error,
                                        veritatis eos dolorem aspernatur doloribus consequuntur.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question2">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Question 03?</a>
                                </h4>

                            </div>
                            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, rerum consequatur?
                                        Quos atque repellat doloremque dolores quaerat minima deserunt eius, consectetur
                                        consequatur eligendi quisquam ex. Omnis praesentium et esse reprehenderit?</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question3">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Q: Question 04?</a>
                                </h4>

                            </div>
                            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consectetur a,
                                        aspernatur hic deserunt veritatis vitae corrupti quis nostrum aliquam nulla
                                        quibusdam molestiae numquam perspiciatis nam dolorem obcaecati, sapiente blanditiis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- fim faq -->

                    </div>
                </div>
            </article>
        </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection