<?php


try {
    $conn = new PDO("sqlsrv:Server=localhost,1433;Database=Teste", 'anderson', '1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 10;
    $name = "Anderson Dev";
    $email = "anderson_dev_30@outlook.com";

    $stmt = $conn->prepare("UPDATE person SET name = :name, email = :email WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    echo "Dados atualizados com sucesso!";
} catch (PDOException $err) {
    echo "Conexão falhou: " . $err->getMessage();
}
