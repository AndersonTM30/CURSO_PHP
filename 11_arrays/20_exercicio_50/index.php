<?php

/**
 * Crie um array associativo com nomes e idades;
 * Imprima estes dados em uma tabela de HTML;
 * Dica: utilize as tags do elemento table;
 */

$pessoas = [
    'Anderson' => 30,
    'Vanessa' => 29,
    'Cícero' => 50,
    'Denison' => 23
];
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
        <table>
            <thead>
                <tr>
                    <th>Nome</th> 
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pessoas as $pessoa => $value) : ?>
                    <tr>
                        <td><?= $pessoa; ?></td>
                        <td><?= $value; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</body>
</html>