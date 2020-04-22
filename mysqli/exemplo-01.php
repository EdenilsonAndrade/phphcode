<?php 

// para criar a conexão com o banco de dados é utilizado a classe mysqli utilizando os parametros na seguinte sequencia: endereço, usuário, senha, nome do banco

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
}

// prepara par receber um comando
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

// no parametro primeiro é informado o tipo de dado, que neste caso é string, então para string é utilizado o s, como são dois campos de string ss. Após é informado os valores que serão inseridos no banco
$stmt->bind_param("ss", $login, $pass);
// aqui será informado o valor das váriveis do comando. Neste caso a variavel poderá ser criada após o bin_param pois a mesma só será executada quando encontrar o execute, como o mesmo vem após a criação da variavel não terá problema
$login = "user";
$pass = "12345";

$stmt->execute();

// como o comando já está preparado eu posso inserir quantos usuários forem necessários, sendo necessário apenas informar o valor das variaveis e utilizar novamente o comando execute

$login = "root";
$pass = "!@#$";

$stmt->execute();

 ?>