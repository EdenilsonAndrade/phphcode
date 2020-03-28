<?php 

// exemplo de como definir o tipo de campo da função, neste caso esperando uma valor inteiro

function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
// neste exemplo que seria um double como foi definido no parametro que a função seria inteiro a função não considera o valor apó o ponto
echo soma(1.6, 3.2);
echo "<br>";
// é preciso tomar cuidado com isso pois se retornar uma string por exemplo irá ocorrer erro
echo soma(teste, t);
echo "<br>";

 ?>