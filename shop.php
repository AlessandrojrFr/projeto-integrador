<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roupas à Venda</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="checkout.php">Pagamento</a></li>
                <li><a href="roupinha.php">Promoções</a></li>
                <li><a href="entrar_cadastrar.php">Entrar / Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="content">
        <h1>Roupas à Venda</h1>

        <!-- Cards de roupas -->
        <div class="clothing-cards">
            <div class="clothing-card">
                <img src="imagens_compras/00847251.avif" alt="Roupa 1">
                <h2>Roupa 1</h2>
                <p>Camiseta Nike Sportswear Polo.</p>
                <p>Preço: R$80.00</p>
                <button>Adicionar ao Carrinho</button>
            </div>
            <div class="clothing-card">
                <img src="imagens_compras/0257510L.avif" alt="Roupa 2">
                <h2>Roupa 2</h2>
                <p>Camisa Nike Brasil I 2023/24.</p>
                <p>Preço: R$90.00</p>
                <button>Adicionar ao Carrinho</button>
            </div>
            <!-- Adicione mais cards de roupas aqui -->
        </div>
    </div>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Compras</title>
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=l2pFb1C6pvN7ZWUMCp_Mkue05hO-UiksF1QdnjsPXZv2TfgBGmzfnJHXqqinrKLzmnsLaZGoK-ruKnETA3us3wh0ao0t2-z4mWLEe-vryho" charset="UTF-8"></script><style>
        /* Estilo básico da página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Estilo do cabeçalho */
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* Estilo da lista de produtos */
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        /* Estilo dos produtos */
        .product {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            text-align: center;
            width: 200px;
        }

        /* Estilo do carrinho de compras */
        .cart {
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Minha Loja Online</h1>
    </header>

    <div class="product-list">
        <div class="product">
            <h2>Produto 1</h2>
            <p>Camiseta Nike Sportswear Polo.</p>
            <p>Preço: R$80.00</p>
            <button onclick="addToCart('Produto 1', 80)">Adicionar ao Carrinho</button>
        </div>
        <div class="product">
            <h2>Produto 2</h2>
            <p>Camisa Nike Brasil I 2023/24.</p>
            <p>Preço: R$90.00</p>
            <button onclick="addToCart('Produto 2', 90)">Adicionar ao Carrinho</button>
        </div>
        <!-- Adicione mais produtos aqui -->
    </div>

    <div class="cart">
        <h2>Carrinho de Compras</h2>
        <ul id="cart-items">
            <!-- Itens do carrinho aparecerão aqui -->
        </ul>
        <p>Total: R$<span id="cart-total">0.00</span></p>
    </div>

    <script>
        // Função para adicionar um item ao carrinho
        function addToCart(productName, price) {
            var cartItems = document.getElementById('cart-items');
            var cartTotal = document.getElementById('cart-total');

            // Criar um novo item de carrinho
            var listItem = document.createElement('li');
            listItem.textContent = productName + ' - R$' + price.toFixed(2);

            // Adicionar item ao carrinho
            cartItems.appendChild(listItem);

            // Atualizar o total do carrinho
            var currentTotal = parseFloat(cartTotal.textContent);
            currentTotal += price;
            cartTotal.textContent = currentTotal.toFixed(2);
        }
    </script>
</body>
</html>
</body>
</html>