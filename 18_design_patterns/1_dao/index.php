<?php

include_once("db.php");

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>

    <div>
        <label for="km">Kilometragem do carro:</label>
        <input type="text" name="km" placeholder="Insira a kilometragem">
    </div>

    <div>
        <label for="color">Cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a cor do carro">
    </div>
    <input type="submit" value="Salvar">
</form>