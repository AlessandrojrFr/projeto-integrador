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
        <p>Nome: João da Silva</p>
        <p>Data de Nascimento: 15 de abril de 1990</p>
        <p>Endereço: Rua da Amostra, 123</p>
        <p>Cidade: Sua Cidade</p>
        <p>Estado: Seu Estado</p>
        <p>CEP: 12345-678</p>

        <h2>Detalhes da Conta</h2>
        <p>Nome de Usuário: joaosilva</p>
        <p>Endereço de E-mail: joao@example.com</p>
        <p>Telefone: (11) 98765-4321</p>

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