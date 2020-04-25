<?php 

// posso utilizar a função scandir para verificar os arquivos que contém no diretório
$images = scandir("images");

$data = array();

// validação para desconsiderar o . e ..
foreach ($images as $img) {
	// o in_array irá buscar o nome do arquivo que neste caso irá verificar para desconsiderar o . ou ..
	if (!in_array($img, array(".", ".."))){
		// variavel para armazenar a pasta, o separador e o nome do arquivo
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		// a função pathinfo retorna informações no arquivo
		$info = pathinfo($filename);
		// função para pegar o tamanho do arquivo em bytes
		$info["size"] = filesize($filename);
		// função para pegar a data de modificação
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		// função para criar um link do arquivo
		$info["url"] = "http://localhost/DIR/".str_replace("\\", "/", $filename);
		// a função array_push é utilizada para enviar as informações de uma variavel para outra, neste caso da $info para $data
		array_push($data, $info);

	}
}

echo json_encode($data);

 ?>