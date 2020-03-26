<?php 

$pessoa = array(
	
	'nome'=>'João',
	'idade'=>20

);

// utilizando o & no valor do foreach eu posso alterar o valor conforme o exemplo que contém um if com a validação que se conter um array numerico irá agregar valor ao campo
// a função gettype retorna o tipo do campo

foreach ($pessoa as &$value) {

	if (gettype($value) === 'integer') $value +=10;
	
	echo $value."<br>";

}

print_r($pessoa);

// se não utilizar o & comercial irá alterar só enquanto estiver dentro do for

$pessoa1 = array(
	
	'nome'=>'João',
	'idade'=>20

);

foreach ($pessoa1 as $value) {

	if (gettype($value) === 'integer') $value +=10;
	
	echo $value."<br>";

}

print_r($pessoa1);

 ?>