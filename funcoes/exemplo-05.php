<?php 

$a = 10;

// exemplo de parametros por valor

// exemplo de função para alterar o valor da variavel a, recebendo o valor dela mesmo + 50

function trocaValor($b){

	$b += 50;

	return $b;

}

// retorna o valor da variavel a inicial

echo $a;

echo "<br>";
// retorna o valor da variavel a aplicando a função trocaValor

echo trocaValor($a);

// porém se exibir novamente a variavel a irá permanecer com o valor orginal

echo "<br>";

echo $a;

echo "<br>";

// exemplo de função por referencia, que altera o valor da variavel quando aplicada. O que muda é que antes do parametro é utilizado o &

function trocaValor1(&$b){

	$b += 50;

	return $b;

}

echo trocaValor1($a);

echo "<br>";

echo trocaValor1($a);

echo "<br>";

echo $a;

 ?>