<?php


try {
    $conn = new PDO("sqlsrv:Server=localhost,1433;Database=Teste", 'anderson', '1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem sucedida!";
} catch (PDOException $err) {
    echo "Conexão falhou: " . $err->getMessage();
}