<?php 

// não aconselhado utilizar o include pois pode ser utilizado para alterar o site, mais aconselhado utilizar o require

// include "inc/exemplo-01.php";

// pode ser utilizado o require porém o mas indicado seria o require_once pelo seguinte motivo, se acaso eu chamar duas vezes a mesma variável o require_once reconhece e irá chamar apenas uma vez, já o require irá chamar as duas vezes e irá ocorrer o erro

// require "inc/exemplo-01.php";

// se for para retornar uma pasta seria necessário utilizar ../ antes de informar a pasta

require_once "inc/exemplo-01.php";

 $resultado = somar(10, 25);

 echo $resultado;

 ?>