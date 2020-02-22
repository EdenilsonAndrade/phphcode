<?php


// tipos básicos de dados

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salarios = 5500.99;
$bloqueado = false;

// tipos compostos, array e objetos

$frutas = array("abacaxi", "laranja", "manga");

// echo $frutas[2];

$nascimento = new DateTime();

// var_dump($nascimento);

// tipos especiais

$arquivo = fopen("exemplo-03.php", "r");

// var_dump($arquivo);

$nul = NULL;

?>