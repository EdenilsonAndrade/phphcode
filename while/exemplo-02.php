<?php 

// codigo para dar desconto de pelo menos 10% e até chegar até ser maior de sem reais

$total = 100;
$desconto = 0.9;

do {

	$total *= $desconto;

} while ($total > 100);

echo $total;
echo "<br>";

// exemplo de código onde o valor é maior e executa mais da que uma vez

$total = 120;
$desconto = 0.9;

do {

	$total *= $desconto;

} while ($total > 100);

echo $total;

 ?>