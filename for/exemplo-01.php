<?php 

// o for seria um laço de repetição, dentro do parenteses primeiro eu informo o valor da variavel, depois a condição que define até quando será executada e por ultimo o incremento

for ($i = 0; $i < 10; $i++) {

	echo $i . "<br>";
}

// exemplo de contador de 5 em 5

for ($i = 0; $i < 1000; $i+=5) {

	echo $i . "<br>";
}

// exemplo com if para não imprimir do 200 até o 800
// se o if conter apenas uma instrução não precisa ter chave

for ($i = 0; $i < 1000; $i+=5) {

	if ($i > 200 && $i < 800) continue;

	if ($i === 900) break;

	echo $i . "<br>";
}


 ?>