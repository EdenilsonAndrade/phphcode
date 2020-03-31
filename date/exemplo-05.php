<?php 

date_default_timezone_set("America/Sao_Paulo");

// para fazer a instancia irá ser utilizado a palavra new, e com isso vira um objeto

$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

 ?>