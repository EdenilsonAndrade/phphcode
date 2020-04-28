<?php 
// validaçõa para verificar se o cookie existe
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
	// se utilizar após o [] um virgula true transforma em array
	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
	// como está em objeto poderá utilizar para acessar determinado ponto do objeto da maneira abaixo
	echo $obj->empresa;
}

 ?>