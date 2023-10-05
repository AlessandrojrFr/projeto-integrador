<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="css/deletar.css">
</head>
<body>
<?php
include("navbar.php");
?> 

    <main class="desvincular">
        <h1>Desvincular Conta</h1>
        <p>Está certo de que deseja desvincular sua conta? Ao fazer isso, você perderá todos os seus dados e histórico de compras.</p>
        
        <div class="action-buttons">
            <button class="btn-danger">Desvincular Conta</button>
            <a href="perfil.php" class="btn-cancel">Cancelar</a>
        </div>
    </main>

    <?php
include("footer.php");
?> 
</body>
</html>