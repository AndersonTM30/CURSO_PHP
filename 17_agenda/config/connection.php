<?php

$host = getenv('HOST');
$dbname = getenv('DB_NAME');
$user = getenv('USER');
$pass = getenv('PASS');

try {
    // $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn = new PDO("sqlsrv:Server=$host;Database=$dbname", $user, $pass);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "conexão efetuada com sucesso!";
} catch (PDOException $err) {
    // erro na conexão
    $error = $err->getMessage();
    echo "Erro: $error";
}