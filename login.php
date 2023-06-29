<?php
include("conexao.php");

if(isset($_POST['bt_email']) || isset($_POST['bt_senha'])) {

  if(strlen($_POST['bt_email']) == 0){
  echo("Preencha seu email");

  }elseif(strlen($_POST['bt_senha']) == 0){
      echo("Preencha sua senha");
  }else{
      $email = $mysqli->real_escape_string($_POST['bt_email']);
      $senha = $mysqli->real_escape_string($_POST['bt_senha']);

      $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1){

          $usuario = $sql_query->fetch_assoc();

          if(!isset($_SESSION)){
              session_start();
          }

          $_SESSION['id_login'] = $usuario['id_cliente'];

          $_SESSION['nome'] = $usuario['nome'];
         
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['senha'] = $usuario['senha'];


          header("Location: teste.php");   

      }else{
          echo "Falha ao logar!Email ou senha incorretos";
      }
  }
}



?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">

      <div id="login">
        <form method="post" action="">
          <h1>Login</h1>
          <p>
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="bt_email" required="required" type="text" placeholder="contato@nikezinho.com.br" />
          </p>

          <p>
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="bt_senha" required="required" type="password" placeholder="1234" />
          </p>

          <p>
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
            <label for="manterlogado">Manter-me logado</label>
          </p>

          <p>
            <input type="submit" value="Logar" />
          </p>

          <p class="link">
            Ainda não tem conta?
            <a href="cadastro_login.php">Cadastre-se</a>
          </p>
        </form>
      </div>
</body>

</html>