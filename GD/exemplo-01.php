<?php 

header("Content-Type: image/png");

// informa o tamanho da imagem
$image = imagecreate(256, 256);

// a primeira cor criado será a cor de fundo
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// primeiro parametro a variavel, segundo o tamanho de 1 a 5, terceiro eixo x (deslocamento), quarto eixo y, quinto texto, sexto a cor
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);
// tem que ser informado no mesmo formato do header
imagepng($image);

imagedestroy($image);

 ?>