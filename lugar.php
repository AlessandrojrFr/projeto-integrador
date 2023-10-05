<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização da Loja</title>
    <link rel="stylesheet" href="css/lugar.css">
</head>
<body>
<?php
include("navbar.php");
?> 
    <main class="location">
        <h1>Encontre Nossa Loja Mais Próxima</h1>

        <!-- Mapa incorporado -->
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.9943464923986!2d-51.679068100000016!3d-24.241976499999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ec158c789725c1%3A0xd5911670a9022677!2sSenac%20Ivaipor%C3%A3!5e0!3m2!1spt-BR!2sbr!4v1695297618747!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

        <!-- Informações sobre a loja mais próxima -->
        <div class="store-info">
            <h2>Loja Mais Próxima</h2>
            <p>PROJETO HOMER</p>
            <p>Endereço: Rua Bittencourt</p>
            <p>Telefone: (43) 9904-3356</p>
        </div>

        <!-- Informações sobre lugares próximos -->
        <div class="nearby-places">
            <h2>Lugares Próximos</h2>
            <ul>
                <li>Campo Society</li>
                <li>Academia</li>
                <li>Supermercado</li>
                <!-- Adicione mais lugares próximos conforme necessário -->
            </ul>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 - Projeto Homer</p>
    </footer>

    <!-- Scripts JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_DA_API_GOOGLE_MAPS&callback=initMap" async defer></script>
    <script src="script.js"></script>
</body>
</html>
