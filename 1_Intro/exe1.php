<?php
// Crie um arquivo php que imprime o seu nome quando for executado.

$nome = $_GET['nome'];
if ($nome != '') {
    $frase = "Seja bem vindo, $nome!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exe1.php" method="get">
        <div>
            <label for="nome">
                Digite seu nome
            </label>
            <input type="text" name="nome" id="nome">
        </div>
        <button type="submit">Enviar</button>
    </form>
    <div>
        <span><?= $frase ?></span>
    </div>
</body>
</html>