<?php

$db = getenv('DB');
$server = getenv('SERVER');
$user = getenv('USER');
$pass = getenv('PASS');


try {
    $conn = new PDO("sqlsrv:Server=$server;Database=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão efetuada com sucesso!";
} catch (PDOException $err) {
    $error = $err->getMessage();
    echo "Erro: $error";
}