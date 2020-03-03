<?php 

// a forma de como o php faz o calculo segue a mesma lógica matemática, se conter parentes irá fazer primeiro, depois o * e / e por último o + e -

$resultado = (10 + 3) / 2;

echo $resultado;

echo "<br>";

// para fazer a validação de que se o calculo é > 2 e < 3, utiliza o operador &&
// para isso não poderá utilizar o echo pois é uma operação de comparação então será necessário utilizar o var_dump

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado);

echo "<br>";

// para fazer a validação utilizando o operador ou utiliza ||

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);

?>