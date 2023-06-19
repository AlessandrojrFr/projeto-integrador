<?php
    include("conexao.php");  // Arquivo php referente ao banco de dados   
    if(isset($_POST['bt_email'])){
        /*-------------------------------------*/ 
            $email = $_POST['bt_email'];
            $nome = $_POST['bt_nome'];
            $senha = $_POST['bt_senha'];
         



        $mysqli -> query("INSERT INTO clientes (email, nome, senha) values ( '$email', '$nome', '$senha')") or 
    die ($mysqli->error);    
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
    <div id="cadastro">
        <form method="post" action=""> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="bt_nome" required="required" type="text" placeholder="Matheus Zanoni" />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="bt_email" required="required" type="email" placeholder="contato@nikeziho.com"/> 
          </p>
          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="bt_senha" required="required" type="password" placeholder="1234"/>
          </p>
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div> 

    </body>
</html>