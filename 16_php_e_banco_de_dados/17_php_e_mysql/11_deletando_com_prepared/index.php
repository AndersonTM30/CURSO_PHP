<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);
$id = 1;

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

$stmt->bind_param('i', $id);

$stmt->execute();

if($stmt->error) {
    echo "Erro: $stmt->error";
}

$conn->close();