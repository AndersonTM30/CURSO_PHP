<?php

if (5 > 2 || 3 < 4) {// true e true
    echo "Se você está vendo essa mensagem é porquê o operador OR retornou um true 1" . PHP_EOL;
}

if (5 > 2 || 3 > 4) {// true e false
    echo "Se você está vendo essa mensagem é porquê o operador OR retornou um true 2" . PHP_EOL;
}

if (5 < 2 || 3 < 4) {// false e true
    echo "Se você está vendo essa mensagem é porquê o operador OR retornou um true 3" . PHP_EOL;
}

if (5 < 2 || 3 > 4) {// false e false
    echo "Se você está vendo essa mensagem é porquê o operador OR retornou um true 4" . PHP_EOL;
}