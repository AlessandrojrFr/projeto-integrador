<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="minhaconta2.css">
    <script src="minhaconta2.js"></script>
<head>
    <style>
        /* Estilo para os labels e campos de senha */
        label, input[type="password"] {
            display: block;
            margin-bottom: 10px;
        }

        /* Estilo para os botões */
        input[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            cursor: pointer;
        }

        #alterar_conta {
            background-color: red;
            color: white;
        }

        #deletar_conta {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form method="post" action="processar_conta.php">
        <label for="senha_atual">Senha Atual:</label>
        <input type="password" id="senha_atual" name="senha_atual" required>

        <label for="nova_senha">Nova Senha:</label>
        <input type="password" id="nova_senha" name="nova_senha" required>

        <label for="confirma_nova_senha">Confirme Nova Senha:</label>
        <input type="password" id="confirma_nova_senha" name="confirma_nova_senha" required>

        <input type="submit" id="alterar_conta" value="Alterar Conta">
        <input type="submit" id="deletar_conta" value="Deletar Conta">
    </form>
</body>
</html>
