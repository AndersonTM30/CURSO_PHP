<?php

$x = 10;

$y =& $x;

echo "1 - $x, 2 - $y";
echo '<br>';

$y = 15;

echo 'Atualizados';
echo "1 - $x, 2 - $y";
echo '<br>';

$nome = 'Anderson';

$nome2 =& $nome;

echo "$nome - $nome2";
echo '<br>';