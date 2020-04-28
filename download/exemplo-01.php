<?php 

$link = "https://scontent.fbnu1-1.fna.fbcdn.net/v/t1.0-9/94312918_1565526210289632_791855221918662656_n.jpg?_nc_cat=101&_nc_sid=110474&_nc_eui2=AeFvy81kbJhEHRuRKKbuywwnhq5Hl0kgn6yGrkeXSSCfrCbf-Vhdg-Ltb9Yw6nQSsoDaTuXJcLXBvV_vvGHsdrGm&_nc_ohc=Agkhxyl8AjsAX-8qfGk&_nc_ht=scontent.fbnu1-1.fna&oh=a74ad5cd404cc19755379f16cf2d71f9&oe=5ECC54FA";

// transforma em binário a imagem
$content = file_get_contents($link);
// interpreta o código retornando um array
$parse = parse_url($link);

// pega o nome da chave path
$basename = basename($parse["path"]);
// criar o arquivo
$file = fopen($basename, "w+");
// faz o dowload para o nosso diretório
fwrite($file, $content);

fclose($file);

 ?>

 <img src="<?=$basename?>">