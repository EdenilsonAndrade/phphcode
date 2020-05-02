<?php 

$email = $_POST["inputEmail"];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	// aqui vai a chave secreta
	"secret"=>"6LdwffEUAAAAAE8VIke0x0AdRFUOphrl8ebJLsvS",
	"response"=>$_POST["g-recaptcha-response"],
	// busca o ip do usuário
	"remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

// var_dump($recaptcha);

if ($recaptcha["success"] === true){

// aqui poderia ser o momento que irá inserir a informação no banco de dados

echo "OK: ".$_POST["inputEmail"];

}else{
// se der erro irá retornar a página para digitar novamente
header("Location: exemplo-04.php");

}

 ?>