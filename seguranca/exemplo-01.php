<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// variavel cmd recebe o name do input
	// utilizar o escapeshellcmd para quando for receber parametro via post utilizando o comando system, com isso se houver algum ataque tentando utilizar comando irá transformar em string
	$cmd = escapeshellcmd($_POST["cmd"]);

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

 ?>
 <form method="post">
 	
 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>

 </form>