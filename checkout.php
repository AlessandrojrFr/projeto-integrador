<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="entrar_cadastrar.php">Cadastro</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li><div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button><ul class="dropdown-menu"><li><button class="dropdown-item" type="button">Action</button></li><li><button class="dropdown-item" type="button">Another action</button></li><li><button class="dropdown-item" type="button">Something else here</button></li></ul></div>
            </ul>
        </nav>
    </header>
    
    <div class="content">
        <h1>Finalize sua Compra</h1>

        <!-- Lista de itens no carrinho -->
        <div class="cart">
            <div class="cart-item">
                <img src="chat/roupa3.png" alt="Roupa 1">
                <div class="item-details">
                    <h3>Roupa 1</h3>
                    <p>Preço: R$80.00</p>
                    <p>Tamanho: M</p>
                </div>
            </div>
            <!-- Adicione mais itens aqui -->
        </div>

        <!-- Formulário de informações de pagamento -->
        <form id="payment-form">
            <h2>Informações de Pagamento</h2>
            <label for="name">Nome no Cartão:</label>
            <input type="text" id="name" required>
            <label for="card-number">Número do Cartão:</label>
            <input type="text" id="card-number" required>
            <label for="expiration">Data de Expiração:</label>
            <input type="text" id="expiration" placeholder="MM/AA" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" required>

            <h2>Método de Pagamento</h2>
            <label for="payment-method">Selecione o Método de Pagamento:</label>
            <select id="payment-method">
                <option value="credit-card">Cartão de Crédito</option>
                <option value="paypal">PayPal</option>
            </select>

            <!-- Botão de pagamento -->
            <button type="submit">Pagar</button>
        </form>
    </div>
</body>
</html>