<?php 

// o nome da constante não pode conter espaço

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'teste'
]);

print_r(BANCO_DE_DADOS);

echo "<br>";

// para pegar um index do array poderá utilizar conforme abaixo

print_r(BANCO_DE_DADOS[1]);

// por padrão a constante será casesensitive, se acaso quiser que não seja poderá utilizar o true no define conforme exemplo abaixo, porém não é uma boa prática

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'teste'
], true);

 ?>