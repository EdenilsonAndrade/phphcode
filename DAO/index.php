<?php 

require_once("config.php");
// chamo a classe usuario
$root = new Usuario();
// chamo a função loadByI e filtro o Id 3
$root->loadById(3);
// retorno a consulta do sql
echo $root;


 ?>