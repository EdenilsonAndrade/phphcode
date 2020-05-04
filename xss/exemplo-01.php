<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 

if (isset($_POST["busca"])) {
	// a função strip_tags remove as tags, podendo ser informado em um segundo parametro a tag que vc irá permitir, no exemplo foi utilizado a tag strong para poder permitir a mesma, se for permitir mais de uma tag deve ser informado no mesmo parametro e dentro do mesmo parenteses, como no exemplo foi informado a tag strong e a taga a
	echo strip_tags($_POST["busca"], "<strong><a>");
	echo "<br>";

	// se quiser deixar a informação porém deixar virar texto utiliza a função htmlentities
	echo htmlentities($_POST["busca"]);

}


 ?>