<?php 

// conexão com o banco
$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :id");

// crio uma variavel para cada valor que será inserido no banco
$id = 1;

// o bindParam é utilizado para ligar os campos, o primeiro parametro a ser recebido seria o alias que foi dado no update e o segundo a váriavel que terá o valor para levar para o update
$stmt->bindParam(":id", $id);

$stmt->execute();

echo "Delete OK!";

 ?>