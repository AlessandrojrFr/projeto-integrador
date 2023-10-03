
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="CSS/perfil.css">
</head>
<body>
<?php
include("navbar.php");
?> 
    <main class="profile">
        <div class="profile-card">
            <img src="profile-pic.jpg" alt="Minha Foto de Perfil">
            <h1>Seu Nome</h1>
            <p>Idade: 30 anos</p>
            <p>Endereço: Rua da Minha Casa, 123</p>
        </div>

        <div class="profile-actions">
            <button class="btn-edit">Editar Perfil</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 - Sua Empresa</p>
    </footer>
    
</body>
</html>
