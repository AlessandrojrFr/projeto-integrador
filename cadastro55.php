<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="cadastro55.css">
    <script src="cadastro55.js"></script>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <form id="cadastroForm" action="processa_cadastro.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento" required>
            </div>
            <div class="form-group">
                <label for="estadoCivil">Estado Civil:</label>
                <select id="estadoCivil" name="estadoCivil" required>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <input type="radio" id="sexoMasculino" name="sexo" value="masculino" required>
                <label for="sexoMasculino">Masculino</label>
                <input type="radio" id="sexoFeminino" name="sexo" value="feminino" required>
                <label for="sexoFeminino">Feminino</label>
            </div>
            <div class="form-group">
                <label for="mensagem">Digite sua mensagem aqui:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto de Usuário:</label>
                <input type="file" id="foto" name="foto" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
