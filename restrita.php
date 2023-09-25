
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas Esportivas</title>
    <link rel="stylesheet" href="css/novidade.css">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>


<header>
    <nav class="navbar">
    <div class="navbar-left">
        <!-- Seu logo aqui -->
        <img src="chat/logo (1).png" alt="Seu Logo">
    </div>

</nav>

        <nav>
            <ul>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>
                <li><a href="entrar_cadastrar.php">Entrar / Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="content">
        <h1>Bem-vindo a Minha Loja</h1>
        <p>Oferecemos uma variedade de produtos incríveis para você.</p>
    </div>
    
    
    <div class="content">
        <h1>Bem-vindo ao Mundo dos Esportes</h1>
        <p>Encontre as melhores roupas e sapatos esportivos aqui!</p>
    </div>

    <!-- Seção de destaque de produtos -->
    <div class="featured-products">
        <div class="product">
            <img src="chat/roupa2.png" alt="Camisa de Futebol">
            <h3>Camisa de Futebol</h3>
            <p>Camisa oficial do time Barcelona</p>
            <p>Preço: R$99.00</p>
            <button>Comprar Agora</button>
        </div>
        <div class="product">
            <img src="chat/roupa1.png" alt="Tênis de Corrida">
            <h3>Tênis de Corrida</h3>
            <p>Ideal para treinamentos de corrida</p>
            <p>Preço: R$129.00</p>
            <button>Comprar Agora</button>
        </div>
        <!-- Adicione mais produtos em destaque aqui -->
    </div>


    
    <main class="news">
        <h1>Novidades e Promoções</h1>

        <section class="promotion">
           
            <div class="update-item">
                <img src="chat/roupa1.png" alt="Novidade 2">
                <h3>Lançamento de Calçados Esportivos</h3>
                <p>Explore nossa linha de calçados esportivos de alta performance, projetados para atletas exigentes.</p>
                <button>Comprar Agora</button>
            </div>

            <div class="promo-item">
                <img src="chat/roupa3.png" alt="Promoção 2">
                <h3>Camisetas Polo por R$ 39,90</h3>
                <p>Camisetas polo elegantes por apenas R$ 39,90 cada. Não perca essa oportunidade!</p>
                <button>Comprar Agora</button>
            </div>
            
            <!-- Adicione mais promoções conforme necessário -->
        </section>

        <section class="updates">
          
            <div class="update-item">
                <img src="chat/femininobrasil4.png" alt="Novidade 1">
                <h3>Nova Coleção de Roupas Femininas</h3>
                <p>Confira nossa mais recente coleção de roupas esportivas femininas, perfeitas para seu estilo ativo.</p>
                <button>Comprar Agora</button>
            </div>

            <div class="promo-item">
                <img src="chat/chuteira.png" alt="Promoção 1">                                                                                                                                              
                <h3>Desconto de 30% em Chuteiras</h3>
                <p>Aproveite agora para comprar sua chuteira favorita com um desconto especial de 30%!</p>
                <button>Comprar Agora</button>
            </div>
            
            <!-- Adicione mais novidades conforme necessário -->
        </section>
    </main>
    <section id="carrinho" class="carrinho">
            <h1>Carrinho de Compras</h1>
            <div id="carrinho-items">
                <!-- Os itens do carrinho serão exibidos aqui -->
            </div>
            <p>Total: R$ <span id="total-carrinho">0.00</span></p>
            <button onclick="finalizarCompra()">Finalizar Compra</button>
        </section>
    </main>
    

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
    <script src="script.js"></script>
</body>
</html>