<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

// para achar a posição onde determinada palavra está

$q = strpos($frase, $palavra);

var_dump($q);

echo "<br>";

// para pegar do inicio da string até a palavra chave

$texto = substr($frase, 0, $q);

echo $texto;

echo "<br>";

// para pegar depois da palavra chave até o final

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo $texto2;

echo "<br>";

// para pegar da palavra chave até o final

$texto3 = substr($frase, $q, strlen($frase));

echo $texto3;


 ?>