
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="CSS/consulta.css">
</head>
<body>
<?php
include("navbar.php");
?> 


    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

    <h1>Tabela de Dias da Semana para Trabalho</h1>
    <table>
        <tr>
            <th>Dia da Semana</th>
            <th>Trabalhar?</th>
        </tr>
        <tr>
            <td>Segunda-feira</td>
            <td>08:00 às 18:00</td>
        </tr>
        <tr>
            <td>Terça-feira</td>
            <td>08:00 às 18:00</td>
        </tr>
        <tr>
            <td>Quarta-feira</td>
            <td>08:00 às 18:00</td>
        </tr>
        <tr>
            <td>Quinta-feira</td>
            <td>08:00 às 18:00</td>
        </tr>
        <tr>
            <td>Sexta-feira</td>
            <td>08:00 às 18:00</td>
        </tr>
        <tr>
            <td>Sábado</td>
            <td>10:00 às 14:00</td>
        </tr>
        <tr>
            <td>Domingo</td>
            <td>Fechado</td>
        </tr>
    </table>



        
<?php
include("navbar.php");
?> 
</body>
</html>
