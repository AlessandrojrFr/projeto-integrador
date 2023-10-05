
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roupas à Venda</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
include("navbar.php");
?> 
    <div class="content">
        <h1>Roupas à Venda</h1>

        <!-- Cards de roupas -->
        <div class="clothing-cards">
            <div class="clothing-card">
                <img src="chat/roupa10.png" alt="Roupa 1">
                <h2>Opção 1</h2>
                <p>Camiseta Juventus Nike Feminino.</p>
                <p>Preço: R$80.00</p>
                <button>Adicionar ao Carrinho</button>
            </div>
            <div class="clothing-card">
                <img src="chat/roupa11.png" alt="Roupa 2">
                <h2>Opção 2</h2>
                <p>Camisa Manchester United 2023/24.</p>
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
            <p>Camiseta Juventus Nike Feminino.</p>
            <p>Preço: R$80.00</p>
            <button onclick="addToCart('Produto 1', 80)">Adicionar ao Carrinho</button>
        </div>
        <div class="product">
            <h2>Produto 2</h2>
            <p>Camisa Manchester United 2023/24.</p>
            <p>Preço: R$90.00</p>
            <button onclick="addToCart('Produto 2', 90)">Adicionar ao Carrinho</button>
        </div>
        <!-- Adicione mais produtos aqui -->
    </div>
   