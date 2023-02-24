<?php

$db_name = getenv('DB_NAME');
$server = getenv('SERVER');
$user = getenv('USER');
$pass = getenv('PASS');

try {
    $conn = new PDO("sqlsrv:Server=$server;Database=$db_name", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    $error = $err->getMessage();
    echo "Erro: $error";
}