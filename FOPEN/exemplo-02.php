<?php 

// exemplo de como gerar um arquivo csv

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();
// foreach para pegar o nome das colunas
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
// função implode é utilizado para adicionar uma informação a variavel, neste exemplo contém a virgula
fwrite($file, implode(",", $headers) . "\r\n");
// foreach para pegar os valores de cada campo
foreach ($usuarios as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {
		
		array_push($data, $value);
	} //end foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");

} //end foreach de linha

fclose($file);


 ?>