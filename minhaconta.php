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
                <li><a href="entrar_cadastrar.php">Cadastro</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>
         
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

        <h2>Mudar seu Perfil</h2>
        <form action="alterar-senha.php" method="post">
            <label for="seunome">Seu nome:</label>
            <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required><br>
            <label for="datanascimento" class="form_label">Data de Nascimento</label>
            <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form_input" id="endereco" placeholder="Endereço" required><br>
            <label for="endereco">Estado:</label>
            <input type="text" name="estado" class="form_input" id="estado" placeholder="Endereço" required><br>
            <label for="endereco">CEP:</label>
            <input type="text" name="CEP" class="form_input" id="CEP" placeholder="CEP" required><br>
            <label for="endereco">Telefone:</label>
            <input type="text" name="telefone" class="form_input" id="telefone" placeholder="Telefone" required><br>
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