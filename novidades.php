
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas Esportivas</title>
    <link rel="stylesheet" href="css/novidade.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="novidades.php">Novidades</a></li>
                <li><a href="sobrenos.php">Sobre nós</a></li>
                <li><a href="consulta.php">Horário de consulta</a></li>
                <li><a href="lugar.php">Onde Estamos</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>

            </ul>
        </nav>
    </header>


        <section id="carrinho" class="carrinho">
            <h1>Carrinho de Compras</h1>
            <div id="carrinho-items">
                <!-- Os itens do carrinho serão exibidos aqui -->
            </div>
            <p>Total: R$ <span id="total-carrinho">0.00</span></p>
            <button onclick="finalizarCompra()">Finalizar Compra</button>
        </section>
    </main>

    <main class="news">
        <h1>Novidades e Promoções</h1>

        <section class="promotion">
           
            <div class="update-item">
                <img src="chat/roupa1.png" alt="Novidade 2">
                <h3>Lançamento de Calçados Esportivos</h3>
                <p>Explore nossa linha de calçados esportivos de alta performance, projetados para atletas exigentes.</p>
            </div>

            <div class="promo-item">
                <img src="chat/roupa3.png" alt="Promoção 2">
                <h3>Camisetas Polo por R$ 39,90</h3>
                <p>Camisetas polo elegantes por apenas R$ 39,90 cada. Não perca essa oportunidade!</p>
            </div>
            
            <!-- Adicione mais promoções conforme necessário -->
        </section>

        <section class="updates">
          
            <div class="update-item">
                <img src="chat/femininobrasil4.png" alt="Novidade 1">
                <h3>Nova Coleção de Roupas Femininas</h3>
                <p>Confira nossa mais recente coleção de roupas esportivas femininas, perfeitas para seu estilo ativo.</p>
            </div>

            <div class="promo-item">
                <img src="chat/chuteira.png" alt="Promoção 1">                                                                                                                                              
                <h3>Desconto de 30% em Chuteiras</h3>
                <p>Aproveite agora para comprar sua chuteira favorita com um desconto especial de 30%!</p>
            </div>
            
            <!-- Adicione mais novidades conforme necessário -->
        </section>
    </main>


    <footer>
        <p>&copy; 2023 - Loja de Roupas Esportivas</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
