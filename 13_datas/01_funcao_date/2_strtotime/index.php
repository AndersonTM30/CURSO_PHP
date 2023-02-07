<?php

$cincoDias = strtotime('5 days');

echo $cincoDias . PHP_EOL;

$dataAtualMais5 = date('d/m/y', $cincoDias);

echo $dataAtualMais5 . PHP_EOL;

$doisMeses = strtotime('2 months');

echo $doisMeses . PHP_EOL;

$dataAtualMais2Meses = date('d/m/y', $doisMeses);

echo $dataAtualMais2Meses . PHP_EOL;

echo date('d/m/y', strtotime('12 years')) . PHP_EOL;