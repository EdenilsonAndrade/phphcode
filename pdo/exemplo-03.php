<?php 

// conexão com o banco
$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

// insert utilizado nos valores um campo que irá esperar um valor, neste caso não será necessário utilizar as aspas simples
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:login, :password)");

// crio uma variavel para cada valor que será inserido no banco
$login = "jose";
$password = "1234567890";

// o bindParam é utilizado para ligar os campos, o primeiro parametro a ser recebido seria o alias que foi dado no insert e o segundo a váriavel que terá o valor para levar para o insert
$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();

echo "Inserido OK!";

 ?>