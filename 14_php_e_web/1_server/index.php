<?php

print_r($_SERVER) . PHP_EOL;

if($_SERVER['SERVER_NAME'] == 'localhost') {
    echo "Estou acessando localmente" . PHP_EOL;
}