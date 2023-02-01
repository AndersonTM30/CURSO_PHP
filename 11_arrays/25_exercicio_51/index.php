<?php

/**
 * Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
 * Ordene os dados do amiro para o menor;
 * Exiba uma lista, simulando ranking, em HTML;
 */

$lista = [
    'Matheus' => 50,
    'Anderson' => 60,
    'Vanessa' => 90,
    'Isis' => 80,
    'Ysaac' => 85
];

arsort($lista);

?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Pontuação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $list => $value) : ?>
            <tr>
                <td><?= $list; ?></td>
                <td><?= $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

