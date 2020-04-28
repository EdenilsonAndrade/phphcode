<?php 

function trataNome($name){
	// valida se a variavel name contém valor
	if (!$name) {

		throw new Exception("Nenhum nome foi informado<br>", 1);
		
	}

	echo ucfirst($name)."<br>";
}

try {

	trataNome("Joao");
	trataNome("");

} catch(Exception $e){

	echo $e->getMessage();

} finally {

	echo "Executou o Try!";

}

 ?>