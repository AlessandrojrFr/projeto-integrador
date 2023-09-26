<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Dropdown</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Compras</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Novidades</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Minha Conta &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Configurações</a></li>
                    <li><a href="#">Minhas Informações</a></li>
                    <li><a href="#">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <script src="script2.js"></script>



    
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
        </div>
        <div class="product">
            <img src="chat/roupa1.png" alt="Tênis de Corrida">
            <h3>Tênis de Corrida</h3>
            <p>Ideal para treinamentos de corrida</p>
            <p>Preço: R$129.00</p>
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

</body>
</html>