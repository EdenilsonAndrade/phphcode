<form>
	
	<texto>digite um número de 1 à 10:</texto>
	<input type="number" name="numero">
	<input type="submit" value="Sortei">

</form>

<!-- exemplo de sistema de sorteio -->
<?php 
	

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {
		
		$numeroEscolhido = $value;
		$numeroSorteado = rand(1,10);
	
		if ($numeroEscolhido == $numeroSorteado) {
		 	
		 	echo "Parabéns, o número ".$numeroEscolhido." foi o sorteado!!!";

		 } else {
			
			echo "Não foi desta vez, o número sorteado foi: " . $numeroSorteado . "<br>";

			echo "<hr>";
		}

	}
}

 ?>

 