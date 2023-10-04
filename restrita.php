<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index2.css">
</head>
<body>
    

<?php
include("navbar.php");
?> 

 




<!-- Carrossel -->
<div id="meuCarrossel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('chat/safadin.png')"></div>
        <div class="carousel-item" style="background-image: url('chat/safadin.png')"></div>
        <!-- Outras imagens do carrossel -->
    </div>
</div>


    <div class="content">
        <h1>Bem-vindo a nossa prévia</h1>
        <p>Oferecemos uma variedade de produtos incríveis ainda melhor para você.</p>
    </div>
    
    
    <div class="content">
        <h1>Bem-vindo ao Mundo dos Esportes</h1>
        <p>Cadastra-se para obter informações ainda melhores sobre nós!</p>
    </div>

    <!-- Seção de destaque de produtos -->
    <div class="featured-products">
        <div class="product">
            <img src="chat/roupa11.png" alt="Camisa de Futebol">
            <h3>Camisa de Futebol</h3>
            <p>Camisa oficial do time Manchester United</p>
            <p>Preço: R$134.50</p>
            <button>Adicionar ao Carrinho</button>

        </div>
        <div class="product">
            <img src="chat/roupa12.png" alt="Tênis de Corrida">
            <h3>Camiseta Real Madrid</h3>
            <p>Camiseta Real Madrid 23/24</p>
            <p>Preço: R$149.00</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <!-- Adicione mais produtos em destaque aqui -->
    </div>
    <div class="featured-products">
        <div class="product">
            <img src="chat/chuteira.png" alt="Camisa de Futebol">
            <h3>Chuteira de Futsal</h3>
            <p>Chuteira PRO5 da umbro</p>
            <p>Preço: R$450.99</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <div class="product">
            <img src="chat/pro5.png" alt="Tênis de Corrida">
            <h3>Chuteira De Futsal</h3>
            <p>Chuteira PRO5 novo lançamento da umbro</p>
            <p>Preço: R$529.00</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <!-- Adicione mais produtos em destaque aqui -->
    </div>
    


    <!-- Seção de destaque de produtos -->
    <div class="featured-products">
        <div class="product">
            <img src="chat/portugal3.png" alt="Camisa de Futebol">
            <h3>Camisa de Futebol</h3>
            <p>Camisa oficial do time de Portugal</p>
            <p>Preço: R$9119.00</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <div class="product">
            <img src="chat/branca2.png" alt="Tênis de Corrida">
            <h3>Camisa de Futebol</h3>
            <p>Camiseta da Nike</p>
            <p>Preço: R$129.00</p>
            <button>Adicionar ao Carrinho</button>
        </div>
        <!-- Adicione mais produtos em destaque aqui -->
    </div>
    

    <?php
include("footer.php");
?> 
    <script src="css/script.js"></script>
</body>
</html>