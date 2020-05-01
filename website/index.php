<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

// aqui seria quando for acessar a página principal
$app->get('/', function(){

	echo json_encode(array(
		'date'=>date("Y-m-d H:i:s")
	));
});

// aqui irá retornar se for utilizado no navegador o endereço http://localhost/website/hello/Hcode

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

 ?>