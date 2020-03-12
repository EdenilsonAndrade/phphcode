<?php 

// exemplo para percorrer a variavel e imprimir a mesma enquanto conter informação

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes) {

	echo "O mês é: ".$mes."<br>";
}

// exemplo de como trazer o indice do array

foreach ($meses as $index => $mes) {

	echo "Indice: ".$index."<br>";
	echo "O mês é: ".$mes."<br><br>";
}

 ?>