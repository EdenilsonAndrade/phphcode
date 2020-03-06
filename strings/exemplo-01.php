<?php 

$nome = "Hcode";

$nome2 = 'Treinamentos';

// tanto aspas simples quanto aspas duplas são string
var_dump($nome, $nome2);

echo "<br>";

// se utilizar aspas duplas irá considerar a variavel 

echo "ABC $nome";

echo "<br>";

// se for aspas duplas irá considerar tudo como texto

echo 'ABC $nome';

// por padrão sempre utilizar aspas duplas, a não ser que no texto possa conter um $ que não seja referente uma variável

 ?>