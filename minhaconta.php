<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">Projeto Homer</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
            </ul>
        </nav>
    </header>

        <h2>Alterar Senha</h2>
        <form action="alterar-senha.php" method="post">
            <label for="senha-atual">Senha Atual:</label>
            <input type="password" id="senha-atual" name="senha-atual" required><br>
            <label for="nova-senha">Nova Senha:</label>
            <input type="password" id="nova-senha" name="nova-senha" required><br>
            <label for="confirmar-senha">Confirmar Nova Senha:</label>
            <input type="password" id="confirmar-senha" name="confirmar-senha" required><br>
            <button type="submit">Alterar Senha</button>
        </form>
    </div>
</body>
</html>