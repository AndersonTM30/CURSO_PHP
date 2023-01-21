<?php

$texto = "Um texto bem grande para poder usar um loop e retornar alguma coisa que ainda não pensei";

for($i = 0; $i < strlen($texto); $i++) {
    print($texto[$i]) . PHP_EOL;
}