<?php

$nome = (int)$_GET["a"];

// var_dump($nome);

// $ip = $_SERVER["REMOTE_ADDR"]; para buscar o ip da máquina


$ip = $_SERVER["SCRIPT_NAME"]; 

echo $ip;

?>