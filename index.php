<!DOCTYPE html>
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
<?php
       include ("navbar.php")
?>

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

    <!-- Seção de destaque de produtos -->
    <div class="featured-products">
        <div class="product">
            <img src="chat/roupa2.png" alt="Camisa de Futebol">
            <h3>Camisa de Futebol</h3>
            <p>Camisa oficial do time Barcelona</p>
            <p>Preço: R$99.00</p>
        </div>
        <div class="product">
            <img src="chat/roupa1.png" alt="Tênis de Corrida">
            <h3>Tênis de Corrida</h3>
            <p>Ideal para treinamentos de corrida</p>
            <p>Preço: R$129.00</p>
        </div>
        <!-- Adicione mais produtos em destaque aqui -->
    </div>
    
    
<?php
      include ("footer.php")
?>
     

</body>
</html>