<?php 
// utilizando esta função eu estou informando que o os notices não irão aparecer, o ~ seria o simbolo de negação neste caso. Isso pode ser ajustado diretamente no php.ini, porém o mais correto seria no config.php pois irá evitar problema futuro de alguém alterar o php.ini
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];
// aqui irá retornar um notice pois o get não foi definido
echo $nome;

 ?>