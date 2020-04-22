<?php 

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
}

// o comando query é utilizado para consulta, no exemplo a consulta será armazenada na variavel result
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// o while irá executar enquanto conter dados. O fetch-array irá verificar se contém algum resultado, quando não conter mais informações já irá retornar false, saindo do while. Está sendo utilizada a variavel row (linha) para armazenar as informações
while ($row = $result->fetch_array()) {

	var_dump($row);
	echo "<br>";
}

$result1 = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// neste exemplo está sendo utilizado o MYSQLI_ASSOC para não retornar a posição do array
while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) {

	var_dump($row1);
	echo "<br>";
}

// poderia ser utilizado desta maneira tbm

$result2 = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// neste exemplo está sendo utilizado o fetch_assoc para não retornar a posição do array
while ($row2 = $result2->fetch_assoc()) {

	var_dump($row2);
	echo "<br>";
}

// para trazer em json as informações
$result3 = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// será necessário criar uma variável

$data = array();

while ($row3 = $result3->fetch_assoc()) {
	// o array_push é utilizado para adicionar um novo item, neste caso está adicionando a informação do $row3 para o $data 
	array_push($data, $row3);
	
}

echo json_encode($data);

 ?>