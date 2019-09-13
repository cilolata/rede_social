<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="./assets/img/icon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script defer src="assets/js/main.js" ></script>
  <title>Busca CEP</title>
</head>

<body>
  <main class="py-2">
    <div class="container d-flex justify-content-center align-items-center">
      <form class="form rounded d-flex flex-column justify-content-center align-items-center p-2" action="">
        <div class="bg-image"></div>

        <div class="col-auto">
          <label for="CEP">CEP</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="CEP" maxlength="9">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <label for="rua">Rua</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="rua">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-road"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <label for="numero">Número</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="numero">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-list-ol"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <label for="complemento">Complemento</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="complemento">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-plus"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <label for="bairro">Bairro</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="bairro">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-home"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-auto">
            <label for="uf">Cidade</label>
            <div class="input-group mb-2">
              <input type="text" class="form-control" id="UF">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-map"></i>
                </div>
              </div>
            </div>
          </div>

        <div class="col-auto">
          <label for="uf">UF</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="UF">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-map-marker"></i>
              </div>
            </div>
          </div>
        </div>

      </form>
    </div>
    <hr>
    <form action="">
      <select name="estado" id="estado">
        <script>
          link = "https://servicodados.ibge.gov.br/api/v1/localidades/estados"
          fetch(link)
            .then(response => response.json())
            .then(data => {
                data.forEach(uf => {
                  estadoNovo = document.createElement('option')
                  estadoNovo.setAttribute('value', uf.sigla)
                  estadoNovo.innerHTML = uf.sigla
                  document.querySelector('#estado').appendChild(estadoNovo)
                  console.log(uf)
                });
            })
  
        </script>
      </select>
    </form>

    <form action="">
      <select name="municipios" id="municipios">
        <script>
          link = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{UF}/municipios"
          fetch(link)
            .then(response => response.json())
            .then(data => {
                data.forEach(id => {
                  municipioPorEstado = document.createElement('option')
                  municipioPorEstado.setAttribute('value', uf.sigla)
                  municipioPorEstado.innerHTML = uf.sigla
                  document.querySelector('#estado').appendChild(municipioPorEstado)
                  console.log(id)
                });
            })
  
        </script>
      </select>
    </form>
    <hr>
  </main>
</body>

</html>