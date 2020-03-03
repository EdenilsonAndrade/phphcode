<?php
// operadores de comparação

$a = 55.0;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b); 

echo "<br>";

// exemplo incorreto para comparar se a variavel a é igual a variavel b, desta forma na verdade está atribuindo o valor de b para o a

// var_dump($a = $b);

// exemplo correto para fazer validação de valores iguais, no caso compara valor e não tipo

var_dump($a == $b);

// para comparar o valor e o tipo deverá utilizar 3 iguais, conforme exemplo abaixo

echo "<br>";

var_dump($a === $b);

// exemplo para verificar se o valor é diferente

echo "<br>";

var_dump($a != $b);

// para validar tbm o tipo de dado no diferente utilizar conforme exemplo abaixo

echo "<br>";

var_dump($a !== $b);

?>