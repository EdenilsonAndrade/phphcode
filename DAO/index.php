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

// inserindo usuário, está sendo informado como parametro o nome e senha pois na classe usuário contém um metodo construtor para isso

$aluno = new Usuario("aluno", "@lun0");
// chamo o metodo insert para inserir as informações
$aluno->insert();
// carrego o usuário que foi inserido
echo $aluno;

echo "<br>";

echo "<strong>alterando usuário e senha</strong> <br>";

// alterando um usuário
// chamo a classe usuário
$usuario = new Usuario();
// busco as informações do usuário que eu quero alterar
$usuario->loadById(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;

echo "<br>";

echo "<strong>deletando usuário</strong> <br>";

// utilizando o método para excluir um usuário

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

 ?>