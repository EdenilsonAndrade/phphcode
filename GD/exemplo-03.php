<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// acrescentou mais um parametro em comparação com o exemplo 02 que seria o angulo que está com 0 no terceiro parametro
// por padrão para evitar erros quando for informado um diretório conforme está no parametro 7 informar o __DIR__ . DIRECTORY_SEPARATOR mesmo estando na mesma pasta
imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 345, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 410, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
// não é necessário informar todos os parametros, se informar só o primeiro irá aparacer em tela, o segundo seria o nome do arquivo, e o terceiro seria a qualidade do arquivo de 1 a 100
imagejpeg($image);

imagedestroy($image);

 ?>