<!DOCTYPE html>
<html>
<head>
    <title>Minha Conta</title>
    <link rel="stylesheet" type="text/css" href="minhaconta2.css">
    
</head>
<body>
    <div class="container">
        <h1>Minha Conta</h1>
        <form id="accountForm" action="process.php" method="post">
            <div class="input-container">
                <label for="senhaAtual">Senha Atual:</label>
                <input type="password" id="senhaAtual" name="senhaAtual">
            </div>
            <div class="input-container">
                <label for="novaSenha">Nova Senha:</label>
                <input type="password" id="novaSenha" name="novaSenha">
            </div>
            <div class="input-container">
                <label for="confirmNovaSenha">Confirme Nova Senha:</label>
                <input type="password" id="confirmNovaSenha" name="confirmNovaSenha">
            </div>
            <div class="2-button-container">
                <button id="deleteAccount" type="button">Alterar Conta</button>
            </div>
            <div class="button-container">
                <button id="deleteAccount" type="button">Deletar Conta</button>
            </div>
        </form>
    </div>

    <script src="minhaconta2.js"></script>
</body>
</html>
