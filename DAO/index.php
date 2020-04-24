<?php 

require_once("config.php");
// chamo a classe usuario
echo "<strong>retorno de uma consulta filtrando por um id</strong> <br>";
$root = new Usuario();
// chamo a função loadByI e filtro o Id 3
$root->loadById(3);
// retorno a consulta do sql
echo $root;

echo "<br>";

echo "<strong>retorno de uma consulta retornando todos os usuários</strong> <br>";

// carrega lista de usuário, como  o metodo é statico não é necessário instanciar

$lista = Usuario::getList();

echo json_encode($lista);

echo "<br>";

echo "<strong>retorno de uma consulta filtrando por nome</strong> <br>";

// retorno da consulta utilizando o metodo search filtrando por nome

$search = Usuario::search("jo");

echo json_encode($search);

echo "<br>";

echo "<strong>retorno de uma consulta filtrando por nome e senha</strong> <br>";

// carrega usuário usando o login e senha

$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;

echo "<br>";

echo "<strong>inserindo usuário</strong> <br>";

// inserindo usuário

$aluno = new Usuario();
// informo usuario e senha com o set
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
// chamo o metodo insert para inserir as informações
$aluno->insert();
// carrego o usuário que foi inserido
echo $aluno;



 ?>