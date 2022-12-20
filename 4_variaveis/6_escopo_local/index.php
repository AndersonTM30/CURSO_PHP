<?php

$x = 10;

echo "$x é uma variável global <br>";

function teste()
{
    $x = 5;

    echo "$x é uma variável local <br>";
}

function teste2()
{
    $x = 12;

    echo "$x é uma variável local 2 <br>";
}

teste();

teste2();