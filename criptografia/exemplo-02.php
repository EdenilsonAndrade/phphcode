<?php 
// inicio da criptografia
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
	"nome"=>"Hcode"
];

$openssl = openssl_encrypt(
	json_encode($data), //variavel para ser criptografada, no exemplo está sendo utilizado o json_encode pois está em um array 
	'AES-128-CBC', //algoritimo
	SECRET, // primeira chave
	0, // informa que não precisa retornar nada além da criptografia
	SECRET_IV // segunda chave
);
// final da criptografia

// para transformar em string, esse valor seria gravado no banco de dados
$base = base64_encode($openssl);

echo $base;

echo "<br>";

// inicio da descriptografia
$string = openssl_decrypt(
	base64_decode($base), //variavel com o decode 
	'AES-128-CBC', //algoritimo
	SECRET, // primeira chave
	0,
	SECRET_IV
);

// final da descriptografia

// valor que retorna com a senha
var_dump(json_decode($string, true));

 ?>