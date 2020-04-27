<?php 

$filename = "logo.png";

// a função file_get_contents le todo o arquivo e faz o fclose 
// base64_encode transforma binário em base64
$base64 = base64_encode(file_get_contents($filename));

// finfo retorna as informações da imagem
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
// informa qual a variavel que tem que pegar as informações
$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

 ?>
<!-- função target _blank para abrir uma nova aba -->
 <a href="<?=$base64encode?>" target="_blank">Link Para Imgem</a>

 <img src="<?=$base64encode?>">