<?php
/*
    Crie um array com valores inteiros de 10 a 100, com o incrimento de 10;
    Aplique um loop neste array;
    Quando entrar os valores 30 ou 40, pule para a próxima execução;
*/

$a = 0;
$lista = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

while($a < count($lista)) {
    echo "Executando o loop $lista[$a]" . PHP_EOL;
    if($lista[$a] == 30 || $lista[$a] == 40) {
        echo "Executando a regra" . PHP_EOL;
        $a++;
        continue;
    }
    $a++;
}