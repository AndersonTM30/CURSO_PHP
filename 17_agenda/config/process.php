<?php

session_start();

include_once('connection.php');
include_once('url.php');

$data = $_POST;
// MODIFICAÇÕES DE DADOS
if (!empty($_POST)) {
    // Criar contato
    if($data['type'] === 'create') {
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "INSERT INTO Teste.dbo.contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':observations', $observations);
        try {
            $stmt->execute();
            $_SESSION['msg'] = 'Contato criado com sucesso!';
            
        } catch (PDOException $err) {
            $error = $err->getMessage();
            echo "Erro: $error";
        }
    } else if ($data['type'] === 'edit') {
        $id = $data['id'];
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "UPDATE Teste.dbo.contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':observations', $observations);
        try {
            $stmt->execute();
            $_SESSION['msg'] = 'Contato atualizado com sucesso!';
            
        } catch (PDOException $err) {
            $error = $err->getMessage();
            echo "Erro: $error";
        }
    }else if($data['type'] === 'delete') {
        $id = $data['id'];
        $query = "DELETE FROM Teste.dbo.contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            $_SESSION['msg'] = 'Contato excluído com sucesso!';
            
        } catch (PDOException $err) {
            $error = $err->getMessage();
            echo "Erro: $error";
        }
    }

    // redirect HOME
    header('Location:' . '../index.php');
} else {
    // SELEÇÃO DE DADOS
    $id;
    if (!empty($_GET)) {
        $id = $_GET['id'];
    }

    // retorna o dado de um contato pelo seu id
    if (!empty($id)) {
        $query = "SELECT * FROM Teste.dbo.contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {

        // retorna todos os contatos
        $contacts = [];

        $query = "SELECT * FROM Teste.dbo.contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// FECHAR CONEXÃO 
$conn = null;