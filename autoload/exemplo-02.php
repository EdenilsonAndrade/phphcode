<?php 

// cria a função incluirclasses para trazer o nome da classe
function incluirClasses($nomeClasse){
// verifica se a classe contém no mesmo diretório
	if (file_exists($nomeClasse.".php") === true) {

		require_once($nomeClasse.".php");

	}
	
}
// pega o nome da classe
spl_autoload_register("incluirClasses");
// aqui está utilizando uma um novo spl para buscar da pasta Abstratas
spl_autoload_register(function($nomeClasse){

	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
	}
});

$carro = new DelRey();

$carro->acelerar(80);

 ?>