<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

// retorna o tamanho da imagem
// var_dump(getimagesize($file));
// essa função já seta os valores nos parametros informados no list
list($old_width, $old_height) = getimagesize($file);

// ajusta a imagem para o novo tamanho
$new_image = imagecreatetruecolor($new_width, $new_height);
// cria imagem com o tamanho original
$old_image = imagecreatefromjpeg($file);

// explicando cada parametro, 1 a nova imagem, 2 imagem original, 3 onde incia no eixo x, 4 onde incia no eixo y, 5 onde inicia o eixo x da imagem origem, 6 onde inicia o eixo y da imagem de origem, 7 tamanho da imagem destino, 8 tamanho da imagem destino, 9 tamanho da imagem de origem, 10 tamanho da imagem de origem
// imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

 ?>