<?php

$a = 'teste';
$b = 12.8;

if(is_float($a)) {
    echo "O número $a é do tipo Float! <br>";
}

if(is_float($b)) {
    echo "O número $b é do tipo Float! <br>";
}

if(is_float(64646.545)) {
    echo "É do tipo Float! <br>";
}

if(is_float('teste')) {
    echo "É do tipo Float! <br>";
}