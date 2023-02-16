<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);

if($conn->connect_errno) {
    echo "Erro na conexão" . PHP_EOL;
    echo "Erro: " . mysqli_connect_error();
}