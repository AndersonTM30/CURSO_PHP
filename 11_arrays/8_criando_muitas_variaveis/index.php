<?php

$pessoa = ['Anderson', 29, 'Programador', 'verde'];

print_r($pessoa);

echo PHP_EOL;

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo "$nome - $idade - $profissao - $corDosOlhos";