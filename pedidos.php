<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pedidos</title>
    <link rel="stylesheet" href="css/pedido.css">
</head>
<body>
    <header>
        <h1>Meus Pedidos</h1>
    </header>

    <section class="order-details">
        <h2>Detalhes do Pedido</h2>
        <div class="order-item">
            <img src="product1.jpg" alt="Produto 1">
            <div class="order-info">
                <h3>Camiseta Esportiva</h3>
                <p>Preço: R$49,99</p>
                <p>Quantidade: 2</p>
                <p>Total: R$99,98</p>
            </div>
        </div>

        <!-- Adicione mais itens do pedido aqui -->

        <div class="total">
            <h3>Total do Pedido: R$199,97</h3>
        </div>
    </section>

    <section class="shipping-address">
        <h2>Endereço de Entrega</h2>
        <p>Nome: João da Silva</p>
        <p>Endereço: Rua Exemplo, 123</p>
        <p>Cidade: Cidade Exemplo</p>
        <p>CEP: 12345-678</p>
    </section>

    <button class="confirm-button">Confirmar Pedido</button>
</body>
</html>
