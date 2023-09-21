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
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="roupinha.php">Promoções</a></li>
                <li><a href="entrar_cadastrar.php">Cadastro</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>
                <li><a href="restrita.php">Login up</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h1>Meu Perfil</h1>
        <h2>Informações Pessoais</h2>
        <p>Nome: João Pedro Talarico</p>
        <p>Data de Nascimento: 23 de abril de 2007</p>
        <p>Endereço: Rua Ivaí 434</p>
        <p>Cidade: Jardim Alegre</p>
        <p>Estado: Brasil</p>
        <p>CEP: 12345-678</p>

        <h2>Detalhes da Conta</h2>
        <p>Nome de Usuário: joaopedro1234</p>
        <p>Endereço de E-mail: joaotalarico2007@gmail.com</p>
        <p>Telefone: (43) 9904 - 2250</p>

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
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvincular Conta</title>
    <link rel="stylesheet" href="css/deletar.css">
</head>
<body>

    <main class="desvincular">
        <h1>Desvincular Conta</h1>
        <p>Está certo de que deseja desvincular sua conta? Ao fazer isso, você perderá todos os seus dados e histórico de compras.</p>
        
        <div class="action-buttons">
            <button class="btn-danger">Desvincular Conta</button>
            <a href="perfil.html" class="btn-cancel">Cancelar</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 - Projeto Homer</p>
    </footer>
</body>
</html>
</body>
</html>