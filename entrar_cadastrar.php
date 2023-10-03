<?php
// Conexão com o banco de dados
$hostname = "localhost";
$usuario = "matheusbla";
$senha = "12345678";
$bancodedados = "banco_pi";

$conn = new mysqli($hostname, $usuario, $senha, $bancodedados);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}



// Verifique se os dados do formulário foram enviados via POST
if (isset($_POST["nome"])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datan = $_POST['datan'];
    $civil = $_POST['civil'];
    $sexo = $_POST['sexo'];
    $procurar = $_POST['procurar'];
    $mensagem = $_POST['mensagem'];

    // Inserir os dados na tabela
    $sql = "INSERT INTO cadastro (nome, email, datan, civil, sexo,)
            VALUES ('$nome', '$email', '$datan', '$civil', '$sexo')";

    if ($conn->query($sql) === TRUE) {
        $mensagem = "Cadastro realizado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar o cartão: " . $conn->error;
    }
}
$conn->close();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/entrar_cadastrar.css">
    <title>𝑪𝑨𝑫𝑨𝑺𝑻𝑹𝑨𝑹</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>
                <li><a href="entrar_cadastrar.php">Entrar / Cadastrar</a></li>
            </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container_form">

        <h1>𝗖𝗮𝗱𝗮𝘀𝘁𝗿𝗮𝗿</h1>

        <form class="form" action="#" method="post">

            <div class="form_grupo">
                <label for="nome" class="form_label">Nome</label>
                <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
            </div>

            <div class="form_grupo">
                <label for="e-mail" class="form_label">Email</label>
                <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
            </div>

            <div class="form_grupo">
                <label for="datanascimento" class="form_label">Data/nascimento</label>
                <input type="date" name="datan" class="form_input" id="datan" placeholder="Data de Nascimento" required>
            </div>

            <div class="form_grupo">

                <label for="estadocivil" class="text">Estado civil</label>
                <select name="estadocivil" class="dropdown" required>

                    <option selected disabled class="form_select_option" value="">Selecione</option>
                    <option value="Solteiro" class="form_select_option">Solteiro(a)</option>
                    <option value="Casado" class="form_select_option">Casado(a) </option>
                    <option value="Divorciado" class="form_select_option">Divorciado(a)</option>
                    <option value="Viúvo" class="form_select_option">Viúvo(a)</option>

                </select>

            </div>

            <div class="form_grupo">

                <span class="legenda">Sexo:</span>

                <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="masculino" name="sexo" value="Masculino" required="required">
                    <label for="masculino" class="radio_label form_label"> <span class="radio_new_btn"></span> Masculino</label>
                </div>

                <div class="radio-btn">
                    <input type="radio" class="form_new_input" id="feminino" name="sexo" value="Feminino" required="required">
                    <label for="feminino" class="radio_label form_label"> <span class="radio_new_btn"></span> Feminino</label>
                </div>

            </div>


            <div class="form_grupo">

                <span class="legenda">Você quer procurar o que?</span>

                <div class="check-btn">
                    <input type="checkbox" class="form_new_input" id="html5" name="aprender" value="html5">
                    <label for="html5" class="form_label check_label"> <span class="check_new_btn"></span>Camisas</label>
                </div>

                <div class="check-btn">
                    <input type="checkbox" class="form_new_input" id="css3" name="aprender" value="css3">
                    <label for="css3" class="form_label check_label"><span class="check_new_btn"></span>Acessórios</label>
                </div>

                <div class="check-btn">
                    <input type="checkbox" class="form_new_input" id="jquery" name="aprender" value="jquery">
                    <label for="jquery" class="form_label check_label"><span class="check_new_btn"></span>Shorts</label>
                </div>

                <div class="check-btn">
                    <input type="checkbox" class="form_new_input" id="wordpress" name="aprender" value="wordpress">
                    <label for="wordpress" class="form_label check_label"><span class="check_new_btn"></span>Tênis</label>
                </div>


                <div class="form_message">

                    <label for="message" class="form_message_label">Digite aqui sua mesagem:</label>
                    <textarea name="mensagem" id="message" cols="30" rows="3" class="form_input message_input" required></textarea>

                </div>

                <div class="submit">

                    <input type="hidden" name="acao" value="enviar">
                    <button type="submit" name="Submit" class="submit_btn"><a id="entrar-cadastrar" href="restrita.php" class="btn-cancel">Cadastrar</a></button>

                </div>
        </form>

    </div><!--container_form-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>