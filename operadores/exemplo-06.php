<?php

// para não buscar a variável se a mesma for nula pode utilizar após a variável o operador ??

$a = NULL;

$b = NULL;

$c = 10;

echo $a ??  $b ?? $c;

?>