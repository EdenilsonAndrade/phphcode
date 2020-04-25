<?php 

// variavel com o nome do diretório
$name = "images";

// verifico se o diretório já existe
if (!is_dir($name)) {
// mkdir para criar o diretório
	mkdir($name);
	echo "Diretório $name criado com sucesso!";
} else {
	// se acaso o diretório já existir posso utilizar o o rmdir para remover o mesmo, ou posso deixar apenas a mensagem informando que o diretório já existe
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}


 ?>