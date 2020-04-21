<?php 

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

echo $cad . "<br>";

// aqui estou informando que quero utilizar a classe Cadastro que está na pasta cliente 

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

// aqui estou retornado a função registrarVenda que está na pasta cliente, arquivo Cadastro
$cad->registrarVenda();

 ?>