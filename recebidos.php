<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>zanoni</title>
    </head>
    <body>
            <h1>recebidosda tela de cadastro</h1>  
            
            
            <p>E-mail:<?php echo $_GET["email"]; ?></p>
            <p>Login de usuario:<?php echo $_GET["login"]; ?></p>
            <p>cidade:<?php echo $_GET["bt_cidade"]; ?></p>
            <p>Senha:<?php echo $_GET["pass"]; ?></p>
            <p>Confirma senha:<?php echo $_GET["passsecret"]; ?><p>

            <a href="zanoni.php">voltar</a> 
    </body>
</html>