<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="CSS/login2.css">
</head>
<body>

    <div class="login-container">
        <h2>Login de Usuário</h2>
        
        <!-- Espaço para foto do perfil -->
        <div class="profile-picture">
            <img src="chat/simpsons3.png" alt="Foto de perfil">
        </div>

        <!-- Formulário de login -->
        <form action="#" method="post">
            <label for="email">E-mail:</label>
            <input class="inputa" type="email" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input class="inputa" type="password" id="password" name="password" required>
            <button class="btn btn-primary"><a id="link-button" href="restrita.php">Entrar</a></button>
        </form>
        
    </div>

</body>
</html>