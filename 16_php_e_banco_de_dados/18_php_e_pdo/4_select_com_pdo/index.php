<?php


try {
    $conn = new PDO("sqlsrv:Server=localhost,1433;Database=Teste", 'anderson', '1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT name, email FROM person");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $res) {
        echo $res['name'] . " - " . $res['email'] . PHP_EOL;
    }
} catch (PDOException $err) {
    echo "Conexão falhou: " . $err->getMessage();
}
