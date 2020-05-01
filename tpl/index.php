<?php 

require_once("vendor/autoload.php");

use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl;

// assign a variable
// aqui o primeiro parametro seria o nome da váriavel e o segundo o valor da mesma, com isso posso chamar o nome da variavel no arquivo index.html para trazer o valor da mesma ao visualizar
$tpl->assign( "name", "Hcode" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
// $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
// aqui será informado o nome do arquivo que por padrão irá buscar com a extensão html, se acaso não for com esta extensão é necessário informar a extensão. O draw tem que ser a última linha do código
$tpl->draw( "index" );

 ?>