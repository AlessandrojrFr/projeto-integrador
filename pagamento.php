<?php
  include('conexao.php');

  if(isset($_GET['id'])){
    $id_produto = $_GET['id'];

    $consultar_banco = "SELECT * FROM cadastro_produtos WHERE id_pedido = $id_produto";

    $retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
    $quantidade_pedidos = $retorno_consulta->num_rows;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="pagamento.css">
  <title>Document</title>
</head>

<body>
  <header>
    <!--- Navbar --->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand text-white" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nvbCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item pl-1">
              <a class="nav-link" href="#"><i class="fa fa-home fa-fw mr-1"></i>camiseta maculina da Nike</a>
            </li>
            <li class="nav-item active pl-1">
              <a class="nav-link" href="#"><i class="fa fa-th-list fa-fw mr-1"></i>Blog</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="#"><i class="fa fa-info-circle fa-fw mr-1"></i>Hakkımızda</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="#"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>İletişim</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="#"><i class="fa fa-user-plus fa-fw mr-1"></i>Kayıt Ol</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="#"><i class="fa fa-sign-in fa-fw mr-1"></i>Oturum Aç</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--# Navbar #-->
  </header>

  <br>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img class="img" src="img-projeto2/imagem1br - Copia.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img class="img" src="img-projeto2/imagem2br - Copia.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-6">
        
      </div>
    </div> <!-- Fechou o row -->

    <div class="row">
      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <img class="img" src="img-projeto2/imagem5 - Copia.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <img class="img" src="img-projeto2/imagem4br.png" class="card-img-top" alt="...">
        </div>
      </div>
    </div>
  </div>
    <?php
    while($produtos = $retorno_consulta -> fetch_assoc()){

    ?>
  <h1><?php echo $produtos['nome_produto'];?>
    <h2><?php echo $produtos['descricao'];?></h2>
    <h4><?php echo $produtos['valor'];?>
    <?php
  }
  ?>
    </h4>



    <div aria-hidden="true" class="pr-rating-stars">
      <div class="pr-star-v4 pr-star-v4-0-filled"></div>
      <div class="pr-star-v4 pr-star-v4-0-filled"></div>
      <div class="pr-star-v4 pr-star-v4-0-filled"></div>
      <div class="pr-star-v4 pr-star-v4-0-filled"></div>
      <div class="pr-star-v4 pr-star-v4-0-filled"></div>
    </div>

    <h2>Tamanho</h2>


    <button data-testid="button-cta-add-cart-mobile" class="ButtonFill__StyledButton-sc-d418d4ee-0 hYCukR">Adicionar ao carrinho</button>


    </div>
  </h1>
  </div>
  </div>
  </div>

  <!--- Footer --->
  <footer>
    <div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
            <div class="card bg-secondary border-0">
              <div class="card-body text-light text-center">
                <h5 class="card-title text-white display-4" style="font-size:30px">Telif Hakkı</h5>
                <p class="d-inline lead">Tüm Hakları Saklıdır © 2018<br>
                  <a href="#" class="text-light d-block lead">Blog</a>
                </p>

              </div>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
            <div class="card bg-secondary border-0">
              <div class="card-body text-center">
                <h5 class="card-title text-white display-4" style="font-size:30px">İletişim</h5>
                <a class="text-light d-block lead" style="margin-left: -20px" href="#"><i class="fa fa-phone mr-2"></i>+90 (000) 000 0 000</a>
                <a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>admin@localhost.com</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card bg-secondary border-0">
              <div class="card-body text-center">
                <h5 class="card-title text-white display-4" style="font-size:30px">Sosyal Medya</h5>

                <a class="text-light" href="#"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a>

                <a class="text-light" href="#"><i class="fa fa-twitter-square fa-fw fa-2x"></i></a>

                <a class="text-light" href="#"><i class="fa fa-instagram fa-fw fa-2x"></i></a>

                <a class="text-light" href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--# Footer #-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>