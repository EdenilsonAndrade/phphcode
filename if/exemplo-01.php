<?php 

$qualASuaIdade = 65;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// estrutura do if

if ($qualASuaIdade < $idadeCrianca) {

	echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {

	echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {

	echo "Adulto";

} else {

	echo "Idoso";
}

echo "<br>";

// para uma validação menor onde precisa apenas retornar uma informação básiva poderá utilizar a função ternária

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

 ?>