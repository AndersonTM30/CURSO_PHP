<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);
$id = 1;
$nome = "Sofá";
$descricao = "Sofá semi novo, com madeira de demolição";

$stmt = $conn->prepare("UPDATE teste SET nome = ?, descricao = ? WHERE id = ?");

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error) {
    echo "Erro: $stmt->error";
}