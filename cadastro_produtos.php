<?php
include("conexao.php");

if (isset($_POST['bt_nome'])) {
    if (isset($_FILES['bt_arquivo'])) {
        $arquivo = $_FILES['bt_arquivo'];
        if ($arquivo['size'] > 15000000) {
            die("Arquivo muito grande!! Max: 15MB");
        }
        if ($arquivo['error']) {
            die("Falha ao enviar arquivo");
        }
    }

    var_dump($arquivo);

    $nome = $_POST['bt_nome'];

    $pasta = "recebidos/";
    $nome_arquivo = $arquivo['name'];
    $novo_nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));



    $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;


    /*
        if($extensao != "jpg"){
            die("Tipo de arquivo não aceito");
        }
        */

    $nome = $_POST['bt_nome'];
    $valor = $_POST['bt_valor'];
    $descricao = $_POST['bt_descricao'];

    $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);

    if ($deucerto) {
        $mysqli->query("INSERT INTO cadastro_produtos (nome_produto, descricao, valor, arquivo_caminho,) 
                values ('$nome', '$descricao','$valor' '$caminho',)") or die($mysqli->error);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Bebidas</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro de roupas</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do Produto:</label>
                <input name="bt_nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Coloque o nome do produto</div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantidade de Produtos disponíveis</label>
                <input name="bt_quantidade" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor da Produto:</label>
                <input name="bt_valor" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descrição do Produto:</label>
                <input name="bt_descricao" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagem do Produto:</label>
                <input type="file" name="bt_arquivo" class="form-control" id="exampleInputPassword1">
            </div>
            <?php
            if (isset($_SESSION['Sucesso'])) {
                echo $_SESSION['Sucesso'];
                unset($_SESSION['Sucesso']);
            }
            ?>
            <input class="btn btn-success" type="submit" value="Cadastrar Produto">
            <a class="btn btn-danger" href="index.php">Cancelar</a>
            <a class="btn btn-primary" href="lista_bebidas.php">Produtos</a>

        </form>
    </div>
    </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>