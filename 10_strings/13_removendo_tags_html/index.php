<?php

$texto = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $texto . PHP_EOL;

$removerTags = strip_tags($texto);

echo $removerTags

?>