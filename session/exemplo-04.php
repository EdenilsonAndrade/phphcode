<?php 

require_once("config.php");

// para forçar a gerar um novo id na sessão utilizar a funçao abaixo

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>