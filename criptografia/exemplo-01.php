<?php 

// este código não irá funcionar pois a função mcrypt_encrypt foi descontinuada na versão 7.2 do php

$data = [
	"nome"=>"Hcode"
];

// define cria uma constante e o pack altera a senha para 16 bit que é o valor esperado pela função mcrypt_encrypt
define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128, //algoritimo
	SECRET, // senha que seria a constante que foi informada na linha 8, lembrando que tem que ser secreta, pois se alguém interseptar terá a informação da senha sem estar encriptografada
	json_encode($data), // a string que será encriptada, no caso está utilizando o json_encode pois a informação da senha está em um array
	MCRYPT_MODE_ECB	// modo de criptografia
);
$final = base64_encode($mcrypt);

var_dump($final);

$string = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128, 
	SECRET, 
	base64_decode($final), 
	MCRYPT_MODE_ECB
);

var_dump(json_decode($string, true));

 ?>