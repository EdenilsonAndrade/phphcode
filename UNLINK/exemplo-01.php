<?php 

$file = fopen("teste.txt", "w+");

fclose($file);

// a função unlink é para apagar o arquivo informado
unlink("teste.txt");

echo "Arquivo removido com sucesso!";

 ?>