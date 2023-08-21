<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/oi.css">
  <link rel="stylesheet" href="CSS/oi.css">
</head>
<style>
  .card{
    transition: transform 0.3s ease;
  }
  .card:hover{
    transform:scale(1.2);
  }
</style>
<body>

<nav id="nav" class="navbar navbar-expand-lg navbar- bg- static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img talarico/BackgroundEraser_20230811_081558768.png"height="50" width="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entrar/Cadastrar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
            Minha Conta
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#">Informações da Conta</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Promoções</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
  <br>

  <div id="camiseta">
    <center><img class="img-fluid" src="img-projeto2/ropaoatualizado.png" width="1100" height="760"></center>
  </div>
  <br>

  <div class="container">

    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/imagem1br - Copia.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Corinthias II</h5>
            <h5 class="card-title">23/24 Torcedora Pro</h5>
            <p>Masculina</p>
            <p>Futebol</p>
            <a href="pagar.php" class="btn btn-primary">Comprar Agora</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/pequeno1.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Brasil I 23/25</h5>
            <h5 class="card-title">Torcedor Pro Masculina</h5>
            <p>Futebol</p>
            <p>Unisex</p>
            <a href="pagar.php" class="btn btn-primary">Comprar Agora</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/barca1.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Barcelona I</h5>
            <h5>23/24 Torcedora Pro</h5>
            <p class="card-text"> Masculina</p>
            <p>Futebol</p>
            <a href="pagar.php" class="btn btn-primary">Comprar Agora</a>

          </div>
        </div>
      </div>

    </div>
  </div>
  <br>
  <br>
  <br>
  <div id="lançamento">
    <center><img src="img-projeto2/tenisbo.png" width="1100" height="760"></center>
  </div>
  </div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>