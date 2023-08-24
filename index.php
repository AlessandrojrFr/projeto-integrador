<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/tkk.css">
 
</head>
<style>
  .card{
    transition: transform 0.3s ease;
  }
  .card:hover{
    transform:scale(1.2);
  }

  h1{
    margin-top: -50px;
    margin-left: 60px;
  }
</style>
<body>

<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img talarico/BackgroundEraser_20230811_081558768.png" width="65" height="59"><h1>𝕭𝖑𝖆𝖈𝖐 𝕯𝖔𝖌</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">𝗠𝗲𝗻𝘂</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
  <div class="container">
  <br>

  <div id="camiseta">
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img talarico/img30.png" class="d-block w-100" width="90" height="700">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img talarico/img31.png" class="d-block w-100" width="90" height="700">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img talarico/img32.png" class="d-block w-100" width="90" height="700">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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