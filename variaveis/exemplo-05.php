<?php

$nome = "Glaucio";

function teste() {

	global $nome;
	echo $nome;

}

function teste2() {

	$nome = "João";

	echo "<br/>";

	echo $nome." agora do teste2";

}

teste();

teste2();

?>