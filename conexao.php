<?php

$hostname = "localhost";
$bancodedados = "projeto-intergrador";
$usuario = "matheusbla";
$senha = "12345678";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);

if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}
?>