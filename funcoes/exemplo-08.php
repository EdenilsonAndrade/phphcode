<?php 

// se precisar alterar o tipo do campo no retorno poderá utilizar a opção :e o tipo após o parametro, conforme exemplo que alterou para string

function soma(int ...$valores):string {

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";
var_dump(soma(1.5, 3.2));
echo "<br>";

// exemplo para retornar um float que neste caso irá somar corretamente os valores com casas decimais após a virgula

function soma1(float ...$valores):float {

	return array_sum($valores);

}

echo soma1(2, 2);
echo "<br>";
echo soma1(25, 33);
echo "<br>";
echo soma1(1.5, 3.2);
echo "<br>";
var_dump(soma1(1.5, 3.2));
echo "<br>";


 ?>