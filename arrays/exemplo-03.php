<?php 

$pessoas = array();

// array_push para inserir registros em uma váriavel array
array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));
// exemplo para imprimir todo o array
print_r($pessoas);
echo "<br>";
// exemplo para selecionar o que imprimir
print_r($pessoas[0]['nome']);

 ?>