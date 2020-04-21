<?php 

// função para pegar o nome da classe

spl_autoload_register(function($nameClass){
// a dirClass recebe o nome da pasta onde contém as classes
	$dirClass = "class";
// o filename irá receber o nome da pasta, contactenando com o separador do sistema operacional, concatenando com o nome da classe, concatenando com o .php que seria a extensão
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
// aqui verifica se contém o arquivo e se conter o arquivo irá chamar o mesmo. Lembrando que no if se quiser saber apenas se o retorno será verdadeiro não será necessário utilizar o === true pois se deixar vazio o php já irá entender isso
	if (file_exists($filename)) {

		require_once($filename);
	}

});

 ?>