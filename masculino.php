<?php
  include('conexao.php');

  if (!isset($_SESSION)){
    session_start();
  }
  $consultar_banco = "SELECT * FROM cadastro_produtos";

  $retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
  $quantidade_pedidos = $retorno_consulta->num_rows;
?>

<html lang="pt-br">

<head>
  <title>Navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página inicial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
</head>

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
  <br>
  <h1>𝐃𝐄𝐒𝐓𝐀𝐐𝐔𝐄 𝐂𝐀𝐌𝐈𝐒𝐀𝐒 𝐍𝐈𝐊𝐄 𝐏𝐑𝐎 𝐂𝐎𝐎𝐋</h1>
  <br>
  <br>
  <div class="container">
    <div class="row">
     <?php
     
     while($produtos = $retorno_consulta->fetch_assoc()){

     ?>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img15.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $produtos['nome_produto'];?></h5>
            <p class="card-text"><?php echo $produtos['descricao'];?></p>
            <p><?php echo $produtos['valor'];?> 33% off</p>
            <p>ou 1x de R$ 99,99</p>
            <a href="cadastro_produtos.php?id=" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
   
      
     </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/barca1.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Barcelona I 2023/24 Torcedor Pro Masculina</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 399,99</p>
            <p>ou 4x de R$ 100,00</p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/nike1.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Polo Essential Feminina</h5>
            <p class="card-text">Casual</p>
            <p>R$ 279,99</p>
            <p>ou 3x de R$ 93,33</p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <h1>𝐃𝐄𝐒𝐓𝐀𝐐𝐔𝐄 𝐂𝐀𝐌𝐈𝐒𝐀𝐒 𝐒𝐏𝐎𝐑𝐓𝐒𝐖𝐄𝐀𝐑 𝐄𝐒𝐒𝐄𝐍𝐓𝐈𝐀𝐋 𝐈𝐂𝐎𝐍</h1>
      <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img_teste.png" alt="">
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Corinthians II 2023/24 Torcedor Pro Masculina</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 229,99 23% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img8.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Portugal II 2022/23 Torcedor Pro Masculina</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 299,99 25% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img11.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Dri-FIT Hyverse Masculina</h5>
            <p class="card-text">Treino & Academia</p>
            <p>R$ 169,99 32% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img9.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Brasil I 2023/24 Jogadora Feminina</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 109,90</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <h1>𝐃𝐄𝐒𝐓𝐀𝐐𝐔𝐄 𝐒𝐇𝐎𝐑𝐓𝐒 𝐕𝐀𝐑𝐈𝐀𝐃𝐎𝐒 𝐌𝐀𝐒𝐂𝐔𝐋𝐈𝐍𝐎𝐒</h1>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/nikeverm.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">CALÇÃO NIKE DRI-FIT PARK III NB K 21 - Júnior - BLACK</h5>
            <p class="card-text">Basketboll</p>
            <p>R$ 209,90</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img13.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">CALÇÃO NIKE DRI-FIT PARK III NB K 21 - Júnior - AZUL</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 199,90</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/shortsbrasa.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">CALÇÃO NIKE CBF BRASIL 22/23 Torcedor</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 209,90</p>
            <p></p>
            <a href="#" class="btn btn-primary">Opção de compra</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img-projeto2/shortspreto1.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">CALÇÃO NIKE HBR 2.0 MASCULINA</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 199,90</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img7.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Shorts Nike Corinthians I 2023/24 Torcedor Pro Infantil</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 229,99 32% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img12.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Shorts Nike Dri-FIT Academy Masculino</h5>
            <p class="card-text">Futebol</p>
            <p>R$ 69,99 42% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img6.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Shorts Jordan Essential Fleece Masculino</h5>
            <p class="card-text">Casual</p>
            <p>R$ 249,99 24% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img talarico/img17.png" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">Shorts Nike Dri-FIT Masculino</h5>
            <p class="card-text">Treino & Academia</p>
            <p>R$ 129,99 43% off</p>
            <p></p>
            <a href="#" class="btn btn-primary">𝐎𝐩çã𝐨 𝐝𝐞 𝐜𝐨𝐦𝐩𝐫𝐚</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>