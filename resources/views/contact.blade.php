@extends('layouts.master')
@extends('layouts.cabecalho')
@extends('layouts.footer')

@section('title', 'Together - Contato')

@section('content')

    <main class="container mt-5 p-5">
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
                                <div class="form-group d-flex flex-wrap">
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
                                    <button class="btn btn-outline-secondary" type="submit">Enviar!</button>
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
                                    <a href="#" class="ing">O que é preciso fazer para ser um voluntário e qual a idade mínima exigida?</a>
                                </h4>

                            
                            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                <h5 class="panel-title">
                                    <a href="#" class="ing">Para ser voluntário é preciso escolher um projeto, se indentificar com ele e se tudo estiver certo, assinar um contrato. A idade mínima exigida é de 14 anos. </p>
                                    </a>
                                </h5>                         
                                    <p>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question1">
                                <h4 class="panel-title">
                                    <a href="#" class="ing"> Como funciona esta rede social? E qual é o tipo de público que ela pretende atender?</a>
                                </h4>
                            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                   
                                <h5 class="panel-title">
                                    <a href="#" class="ing">Esta rede social tem o intuito de conectar pessoas da mesma comunidade, para criarem um evento, que ajude o seu entorno: como limpar uma praça, cuidar de animais. E pretende atingir o maior número de pessoas, que tenham interesses em trabalhar em prol de sua comunidade.</a>
                                </h5>      
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question2">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Na minha comunidade há uma grande carência de ações sociais. Posso criar mais de um evento em diferentes áreas?</a>
                                </h4>
                            
                            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                 <h5 class="panel-title">
                                    <a href="#" class="ing">Sim. Porém, estes eventos precisam ser criados em datas distintas, assim pessoas que tenham interesses nos dois possam frequentá-los, e pessoas que tenham interesses somente num deles não fiquem confusas e possam se dedicar ao máximo no evento escolhido.</a>
                                </h5> 
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="panel panel-default ">
                            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question3">
                                <h4 class="panel-title">
                                    <a href="#" class="ing">Achei bem interessante a proposta de vocês, mas nao tenho tempo para participar de nenhum Evento. Existe outra forma de contribuir com o projeto? </a>
                                </h4>

                           
                            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p> 
                                    </p>
                                <h5 class="panel-title">
                                    <a href="#" class="ing">Por enquanto não aceitamos doações, mas se você puder divulgar para o maior número de pessoas um evento que ocorra em sua comunidade, agradecemos.</a>
                                </h5> 
                            </div>
                            </div>
                            </div>
                        </div>
                        <!-- fim faq -->

                    </div>
                </div>
            </article>
        </section>

    </main>

    
@endsection