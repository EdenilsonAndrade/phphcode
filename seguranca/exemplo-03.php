<?php 

$pasta = "arquivos";
$permissao = "0775";
// O primeiro parametro do mkdir seria o nome da pasta, o segundo seria a permissão
if (!is_dir($pastta)) mkdir($pasta, $permissao);

echo "Diretório criado com sucesso!";

 ?>