<?php 
// mkdir para criar a pasta e o if para verificar se a mesma já existe
if (!is_dir("images")) mkdir("images");

// faz um foreach para verificar os arquivos que contém na pasta images
foreach (scandir("images") as $item) {
	// desconsidera os arquivos com nome . e ..
	if (!in_array($item, array(".", ".."))) {
		// exclui os arquivos
		unlink("images" . DIRECTORY_SEPARATOR . $item);
	}
}

echo "OK";

 ?>