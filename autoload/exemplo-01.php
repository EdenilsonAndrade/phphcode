<?php 

// esta função é utilizada para buscar as classes conforme a mesma é instanciada, exemplo em new DelRey que está chamando a classe DelRey e já irá chamar a classe pai Automovel
// tem que tomar cuidado com o autoload pois ele só encontra as classes que estão no mesmo diretório, se conter uma classe que estiver em outra pasta irá retornar erro pois não irá encontrar a mesma
function __autoload($nomeClasse){
	// aqui está sendo utilizado o var_dump apenas para verificar que o autoload chamou as classes conforme foi instanciado
	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}

$carro = new DelRey();

$carro->acelerar(80);

 ?>