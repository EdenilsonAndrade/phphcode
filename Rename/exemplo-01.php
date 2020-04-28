<?php 

$dir1 = "folder_01";
$dir2 = "folder_02";
$filename1 = "teste.txt";

// validação para verificar se o diretório existe e se não existir criar o mesmo
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";
// validação para verificar se o arquivo existe
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
	// se não existir irá criar o mesmo
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
	// insere no arquivo a data de hoje
	fwrite($file, date("Y-m-d H:i:s"));
	// fecha o arquivo
	fclose($file);
}

// para alterar o diretório, posso tbm alterar o nome do arquivo
rename($dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
	$dir2 . DIRECTORY_SEPARATOR . $filename1 //Destino
);

echo "Arquivo movido com sucesso!";

 ?>