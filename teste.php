<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['email'])) {
        die("Voce não pode acessar está página porque não está logado. <p><a href=\"login.php\">Entrar</p>");
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meu.css">
    <title>Document</title>

</head>
<body>
    <h1>Usuário logado</h1>

    <body>
   
</body>
</html>