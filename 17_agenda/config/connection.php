<?php

$host = getenv('HOST');
$dbname = getenv('DB_NAME');
$user = getenv('USER');
$pass = getenv('PASS');

try {
    $conn = new PDO("sqlsrv:server=$host;database=$dbname", $user, $pass);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizado com sucesso";
} catch (PDOException $err) {
    // erro na conexão
    $error = $err->getMessage();
    echo "Erro: $error";
}