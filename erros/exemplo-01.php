<?php 
// função de erro, verificar que o json não precisa necessariamente seguir a mesma ordem dos parametros
function error_handler($code, $message, $file, $line){

	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"line"=>$line,
		"file"=>$file
	));

}

// para o php buscar esta função é necessário utilizar o comando abaixo
set_error_handler("error_handler");

$total = 100 / 0;

 ?>