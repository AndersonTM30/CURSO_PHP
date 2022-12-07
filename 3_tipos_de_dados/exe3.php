<?php
#Crie um programa que imprime três números inteiros;
$numero1 = $_GET['valor1'];
$numero2 = $_GET['valor2'];
$numero3 = $_GET['valor3'];
if($numero1 != '' && $numero2 != '' && $numero3 != '') {
    $calculo = ($numero1 + $numero2) / $numero3;
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
    <div>
        <form action="exe3.php" method="get">
            <div>
                <label for="valor1">Digite o primeiro número:</label>
                <input type="text" name="valor1" id="valor1">
            </div>
            <div>
                <label for="valor2">Digite o segundo número:</label>
                <input type="text" name="valor2" id="valor2">
            </div>
            <div>
                <label for="valor3">Digite o terceiro número:</label>
                <input type="text" name="valor3" id="valor3">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <div>
        <p>Número 1: <?= $numero1 ?></p>
        <p>Número 2: <?= $numero2 ?></p>
        <p>Número 3: <?= $numero3 ?></p>
        <p>Resultado: <?= $calculo ?></p>
    </div>
</body>
</html>