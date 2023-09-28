<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu Responsivo</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="contato.php" class="nav-link"> Contato</a></li>
                    <li class="nav-item"><a href="shop.php" class="nav-link"> Compras</a></li>
                    <li class="nav-item"><a href="consulta.php" class="nav-link"> Consulta</a></li>
                    <li class="nav-item"><a href="lugar.php" class="nav-link"> Onde Estamos</a></li>
                    <li class="nav-item"><a href="sobrenos.php" class="nav-link"> Sobre Nós</a></li>
                    <li class="nav-item"><a href="minhaconta.php" class="nav-link"> Minha Conta</a></li>
                </ul>
            </div>
            <div class="login-button">
                <button><a href="perfil.php">Sair</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="assets/img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Entrar</a></button>
            </div>
        </div>
    </header>

    <script src="css/script3.js"></script>
</body>
<!-- FEITO POR: LARISSA V. KICH  -->

</html>