
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="CSS/consulta.css">
</head>
<body>
<header>
        <nav>
            <a href="index.php">Início</a>
            <a href="shop.php">Compras</a>
            <a href="contato.php">Contato</a>
            <a href="minhaconta.php">Minha Conta</a>
            <a href="novidades.php">Novidades</a>
            <a href="consulta.php">Horário de Consulta</a>
        </nav>
    </header>
    <main class="consult">
        <h1>Agende sua Consulta</h1>
        <p>Estamos disponíveis para ajudá-lo a encontrar a melhor roupa para você. Agende uma consulta conosco para uma experiência personalizada.</p>

        <section class="consult-info">
            <h2>Horários de Atendimento</h2>
            <ul>
                <li>Segunda-feira: 10:00 - 18:00</li>
                <li>Terça-feira: 10:00 - 18:00</li>
                <li>Quarta-feira: 10:00 - 18:00</li>
                <li>Quinta-feira: 10:00 - 18:00</li>
                <li>Sexta-feira: 10:00 - 18:00</li>
                <li>Sábado: 10:00 - 16:00</li>
                <li>Domingo: Fechado</li>
            </ul>
        </section>

        <section class="consult-form">
            <h2>Agende sua Consulta</h2>
            <p>Preencha o formulário abaixo e entraremos em contato para confirmar a consulta.</p>
            <form action="#" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Telefone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="date">Data Preferida:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Horário Preferido:</label>
                <input type="time" id="time" name="time" required>

                <button type="submit">Agendar Consulta</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 - Sua Empresa</p>
    </footer>
</body>
</html>
