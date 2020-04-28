<?php 

try {
// o segundo parametro seria o código do erro, esse código poderá ser informado o número desejado. É interessante conter uma documentação de erro para poder identificar do que cada um se trata. Bom tbm conter erro por nível, exemplo: número 400 até 499 erro de usuário, de 500 a 599 erro de upload....
 throw new Exception("Houve um erro.", 400);
 
// no catch o primeiro parametro seria o próprio exception e o segundo onde será armezanado o mesmo, que no exemplo seria a variavel $e
} catch (Exception $e) {

	echo json_encode(array(
		"message"=>$e->getMessage(),//mensagem do erro
		"line"=>$e->getLine(), //linha do erro
		"file"=>$e->getFile(), //arquivo do erro
		"code"=>$e->getCode() //código do erro
	));

}

 ?>