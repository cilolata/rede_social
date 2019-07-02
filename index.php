<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Projeto Rede Social</title>
</head>

<body>
    <!--inicio cabeçalho-->
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light shadow-sm p-3 mb-5">
            <div class="container">

                <!--cabeçalho logo e nome--->
                <a href="index.php" class="navbar-brand">
                    <img src="img/light-bulb.png" style="width:15%" alt="imagem_logo" class="">
                    Nome da Rede
                </a>
                <!--fim cabeçalho logo e nome-->

                <!--menu collapse-->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--fim -menu collapse-->

                <!--inicio formulario entrar-->
                <form class="navbar-form" role="login">
                    <div class="d-flex">
                        <div class="form-inline">
                            <input class=" form-control rounded mr-1" type="text" name="email" id="email" placeholder="Digite seu e-mail">
                            <input class=" form-control rounded" type="password" name="password" id="password" placeholder="Digite sua senha">
                            <button class="btn btn-outline-success ml-1" type="submit" class="btn btn-default">Login</button>
                        </div>
                </form>
                <!--fim formulario entrar-->

                <!--botao cadastrar-->
                <div class="collapse navbar-collapse" id="nav-principal">
                    <div class="nav-item">
                        <a href="#cadastrar" class="btn btn-outline-success ml-1">
                            Cadastre-se
                        </a>
                    </div>
                </div>
            </div>
            <!-- fim botao cadastrar-->
            </div>
        </nav>
    </header>
    <!--fim cabeçalho-->

    <main>
        <!-- inicio section destaque-->
        <section id="destaque">
            <div class="container-fluid">
                <div class="d-flex">
                    <div class="row">
                        <div class="col-lg-4 texto">
                            <h1 class="display-5 display-sm-1">Conecte-se com pessoas que querem mudar o mundo</h1>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat obcaecati sint hic maiores est deleniti consectetur minima asperiores dolorum quas nulla consequatur, eligendi veritatis, culpa ea iure suscipit ducimus deserunt!</p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a>
                        </div>

                        <div class=" imagem-principal col-lg-6 d-none d-lg-block">
                            <div class="d-flex justify-content-center">
                                <img src="img/save.png" style="width:50%;"alt="imagem mãos segurando a terra">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- fim section destaque-->

        <!-- início section cadastrar-->
        <section id="cadastrar">
            <div class="container-fluid row d-flex">
                
                <div class="col-lg-6 d-none d-lg-block ">
                    <div class="d-flex justify-content-center ">
                        <img class="imagem2" src="img/connection.png" style="width:50%" alt="imagem-conexão" class="img_form aling-self-center">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <h3>Junte-se à nós!</h3>
                    <p>Cadastre-se</p>
                    <form>
                        <div class="form-group">
                            <label purpose="float" for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" required="required">
                        </div>
                        <div class="form-group">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" required="required">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Nascimento:</label>
                            <span class="_5k_4" data-type="selectors" data-name="birthday_wrapper" id="u_0_s"><span>

                                    <select aria-label="Month" name="birthday_month" id="month" title="Month" class="_5dba ml-1">
                                        <option value="0">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7" selected="1">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>

                                    <select aria-label="Day" name="birthday_day" id="day" title="Day" class="_5dba mr-1">
                                        <option value="0">Day</option>
                                        <option value="1" selected="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>

                                    <select aria-label="Year" name="birthday_year" id="year" title="Year" class="_5dba">
                                        <option value="0">Year</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994" selected="1">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
                                        <option value="1919">1919</option>
                                        <option value="1918">1918</option>
                                        <option value="1917">1917</option>
                                        <option value="1916">1916</option>
                                        <option value="1915">1915</option>
                                        <option value="1914">1914</option>
                                        <option value="1913">1913</option>
                                        <option value="1912">1912</option>
                                        <option value="1911">1911</option>
                                        <option value="1910">1910</option>
                                        <option value="1909">1909</option>
                                        <option value="1908">1908</option>
                                        <option value="1907">1907</option>
                                        <option value="1906">1906</option>
                                        <option value="1905">1905</option>
                                    </select>
                                </span>
                            </span>
                        </div>
                        <div class="button">
                            <button type="submit">Cadastrar</button>
                            <form>
                        </div>
                </div>
        </section>
        <!-- fim section cadastrar -->

        <!--começo section anuncios-->
        <section>
            <div class="container">
                <div class="d-flex flex-row">

                    <div class="card mr-5" style="width: 16rem;">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>



                    <div class="card mr-5" style="width: 16rem;">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>


                    <div class="card mr-5" style="width: 16rem;">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>

                    <div class="card mr-5" style="width: 16rem;">
                        <img class="card-img-top" src="img\imagem1.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>

        </section>
        <!--fim section anuncios-->
    </main>
    <!--iincio footer-->
    <footer>
        <div class="bg-light mt-5 ml-auto">
            <div class="container">
                <div class="d-flex flew-row">
                    <div class=" ml-5 col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Home</a></li>
                            <li><a href="">Contato</a></li>
                            <li><a href="">Assss</a></li>
                            <li><a href="">Addddd</a></li>
                        </ul>
                    </div>
                    <div class="d-flex flex-row align-items-end col-6">
                        <div class="small">Icons made by <a href="https://www.flaticon.com/authors/mynamepong" title="mynamepong">mynamepong</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div class="small">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://br.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--fim footer-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>