<?php 

// exemplo utilizando o sqlserver

$conn = new PDO("sqlsrv:Database=dbphp7; Server=EDENILSON-PC\SQLEXPRESS;ConnectionPooling=0", "EDENILSON-PC\Avell", "");

// aqui está criando a consulta
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

// aqui está mandando executar a consulta
$stmt->execute();

// aqui está setando a informação da consulta na variavel results utilizando o fetchAll, e no parametro está utilizando a opção para trazer as informações resumidas do array utilizando o FETCH_ASSOC
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// aqui está levando o resultado para a tela
echo "<strong>Exemplo retornando array</strong><br><br>";
var_dump($results);

echo "<br><br>";
// aqui poderia já passar diretamente a variavel para json
echo "<strong>Exemplo json</strong><br><br>";
echo json_encode($results);
echo "<br><br>";

// se quiser percorrer a variavel poderia utilizar um foreach
echo "<strong>Exemplo utilizando o foreach para retornar a informação da coluna e o resultado da mesma</strong><br><br>";
foreach ($results as $row) {
	// o $row seria a linha, $key a coluna, $value o valor da mesma
	foreach ($row as $key => $value) {

		echo "<strong>".$key.":</strong>".$value."<br>";

	}

	echo "======================================<br>";
}

 ?>