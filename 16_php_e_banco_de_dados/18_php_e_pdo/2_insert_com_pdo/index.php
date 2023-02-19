<?php


try {
    $conn = new PDO("sqlsrv:Server=localhost,1433;Database=Teste", 'anderson', '1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = "Anderson";
    $email = "anderson.dev.30@gmail.com";

    $stmt = $conn->prepare("INSERT INTO person (name, email) VALUES (:name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    echo "Dados inserido com sucesso!";
} catch (PDOException $err) {
    echo "Conexão falhou: " . $err->getMessage();
}
