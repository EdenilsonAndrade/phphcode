<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:3;
// uma das formas para validar como neste caso seria para retornar um id que é numerico poderia validar se esta sendo informado um número. Podendo fazer o if abaixo. Se fosse string poderia validar o tamanho máximo do campo, no exemplo foi utilizado o id mesmo, mas supondo que fosse por nome e o maior nome for com 5 caracter utilizaria a opção > 5
if (!is_numeric($id) || strlen($id) > 5) {
	exit("Pegamos você!");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

	var_dump($resultado);

}



 ?>