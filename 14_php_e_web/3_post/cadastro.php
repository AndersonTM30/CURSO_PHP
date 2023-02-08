<?php
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $opcionais = $_POST['opcionais'];
?>

<h1>Carro da marca <?= $marca; ?>, no valor de <?= $preco; ?>, com as opções: <?= $opcionais[0]; ?></h1>