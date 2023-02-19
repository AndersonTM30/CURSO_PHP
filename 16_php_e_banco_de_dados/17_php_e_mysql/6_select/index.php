<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);

$select = "SELECT * FROM teste";

$result = $conn->query($select);

$conn->close();

// retorna um resultado
$pessoas = $result->fetch_assoc();
print_r($pessoas);

// retorna todos os resultados

$pessoas = $result->fetch_all();
print_r($pessoas);