<?php
// No curso o instrutor utiliza o xampp, no meu caso estou utilizando o servidor do próprio PHP ai não precisa
// deste tipo de configuração
include_once('helpers/url.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="../index.php" id="logo">
            <img src="../img/logo.svg" alt="Blog Anderson">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="../contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>