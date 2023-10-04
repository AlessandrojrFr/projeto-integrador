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

    <style>
        /* Estilizando o carrossel para cobrir a tela inteira */
        .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        /* Adicionando animação ao navbar */
        .navbar {
            transition: all 0.4s;
        }
        
        .navbar.scrolled {
            background-color: #333;
        }
    </style>




<!-- Carrossel -->
<div id="meuCarrossel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('chat/safadin.png')"></div>
        <div class="carousel-item" style="background-image: url('chat/safadin.png')"></div>
        <!-- Outras imagens do carrossel -->
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Adicionar animação ao navbar ao rolar
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
</script>

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
    

    <footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h2>Sobre Nós</h2>
            <p>Somos uma loja dedicada a fornecer os melhores produtos esportivos para atletas e entusiastas do esporte. Nossos produtos são selecionados cuidadosamente para garantir qualidade e desempenho.</p>
        </div>
        <div class="footer-section social">
            <h2>Redes Sociais</h2>
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
        <div class="footer-section contact">
            <h2>Contato</h2>
            <p>Email: contato@lojaesportiva.com</p>
            <p>Telefone: (123) 456-7890</p>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2023 Loja Esportiva | Todos os direitos reservados
    </div>
</footer>
    <script src="css/script.js"></script>
</body>
</html>