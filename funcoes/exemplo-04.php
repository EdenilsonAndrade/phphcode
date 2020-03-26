<?php 

// exemplo de receber mais de um valor no mesmo parametro

function ola(){

	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(ola("Bom dia", 10));

 ?>