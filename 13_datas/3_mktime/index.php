<?php

$dataNascimento = mktime(02, 12, 33, 02, 05, 2004);

echo $dataNascimento . PHP_EOL;

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

echo $dataNascimentoFormatada . PHP_EOL;

$dataEspecífica = mktime(10, 20, 11, 04, 28, 2041);

$dataFuturaFormatada = date('d/m/Y', $dataEspecífica);

echo $dataFuturaFormatada . PHP_EOL;