<?php
include_once("config/url.php");
include_once("config/process.php");

// limpa a mensagem
if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <title>Agenda de Contatos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">
                <img src="../img/logo.svg" alt="Agenda logo">
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active" id="home-link">Agenda</a>
                    <a href="create.php" class="nav-link active">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>