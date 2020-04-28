<!-- tag para criar o upload, é necessário utilizar o enctype para poder converter o arquivo em código binario -->
<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>

<?php 
// condição para verificar se o metoho é post
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// a função _FILE busca as informações do arquivo que está sendo feito upload. Dentro dos [] eu informo o name da tag input
	$file =  $_FILES["fileUpload"];
	// condição para verificar se ocorreu erro no upload para a pasta temporária, se ocorreu irá retornar o erro
	if ($file["error"]) {

		throw new Exception("Error: " . $file["error"]);
	}

	$dirUploads = "uploads";
	// condição para verificar se existe o diretório, se não existir irá criar o mesmo
	if (!is_dir($dirUploads)) {

		mkdir($dirUploads);

	}
	// condição para verificar se ocorreu erro no upload
	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {

		echo "Upload realizado com sucesso!";

	} else {

		throw new Exception("Não foi possível realizar o upload, tente novamente.");
	}

}
// condição para permitir apenas extensão de imagens
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
//     $file = $_FILES["fileUpload"];
 
//     $ext = explode(".", $file['name'])[1];
 
//     $extensions = array("jpg", "jpeg", "png");


 ?>