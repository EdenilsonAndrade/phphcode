<?php 

// exemplo de função se precisar retornar com muita frequencia a mensagem olá mundo

function ola(){

	echo "Olá Mundo!<br>";

}

ola();
ola();
var_dump(ola());

// para utilizar a função como string

function ola1(){

	return "Olá Mundo!<br>";

}

echo ola1();
echo ola1();
var_dump(ola1());

// exemplo de uma variavel recebendo uma função

$frase = ola1();

// para verificar o tamanho da variavel frase que recebeu os dados da função ola1
// detalhe importante o retorno do strlen é de 15 porque retorna tbm os caracteres da tag br

echo strlen($frase);

 ?>