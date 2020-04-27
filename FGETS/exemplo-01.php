<?php 
// exemplo para ler um arquivo em csv
$filename = "usuarios.csv";

if (file_exists($filename)) {
	// o parametro r seria para ler o arquivo
	$file = fopen($filename, "r");
	// a função explode transforma em um array, fgets le a primeira linha
	$headers = explode(",", fgets($file));

	$data = array();

	while ($row = fgets($file)) {
		
		$rowData = explode(",", $row);
		$linha = array();

		for ($i = 0; $i < count($headers); $i++) {

			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha);

	}
	// fecha o arquivo
	fclose($file);

	echo json_encode($data);

}

 ?>
