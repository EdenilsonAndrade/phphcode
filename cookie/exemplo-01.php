<?php 

$data = array(

	"empresa"=>"Hcode Treinamentos"

);

// cria o cookie, o primeiro parametro seria o nome do cookie, e o segundo o valor que irá gravar no mesmo, o terceiro parametro seria o tempo que o cookie irá durar, neste exemplo está pegando a hora atual e somando 3600 segundos que seria equivalente a 1 hora
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

 ?>