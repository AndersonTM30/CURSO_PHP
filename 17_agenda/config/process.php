<?php

session_start();

include_once('connection.php');
include_once('url.php');

$id;
if(!empty($_GET)) {
    $id = $_GET['id'];
}

// retorna o dado de um contato pelo seu id
if(!empty($id)) {
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
