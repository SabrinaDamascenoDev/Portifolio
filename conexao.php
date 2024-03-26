<?php
$servername = "localhost";
$username = "root"; // substitua pelo seu nome de usuário
$password = ""; // substitua pela sua senha
$dbname = "portifolio"; // substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>