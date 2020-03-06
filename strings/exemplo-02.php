<?php 

$nome = "joão rangel";

echo $nome;

echo "<br>";

// para deixar tudo maiusculo, porém teria que fazer a tratativa para a letras com acentuação

echo strtoupper($nome);

echo "<br>";

// para deixar tudo minusculo

echo strtolower($nome);

echo "<br>";

// para deixar só a primeira letra maiusculas de todas as palavras

echo ucwords($nome);

echo "<br>";

// para deixar maiusculo a primeira letra apenas da primeira palavra

echo ucfirst($nome);

 ?>