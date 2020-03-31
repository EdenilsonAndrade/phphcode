<?php 

// para não ocorrer problema na formatação nos dias que contém acentuação

header('Content-type: text/html; charset=ISO-8859-1');

// exemplo para alterar toda a configuração de região, sendo o servidor linux ou windows
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");

// melhor do que a função time pois consegue retornar as informações em portugues

echo strftime("%A, %d %B de %Y.");

 ?>