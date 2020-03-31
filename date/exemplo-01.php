<?php 

// utilizar para pegar o fuso horário de são paulo

date_default_timezone_set("America/Sao_Paulo");

// exemplo para trazer a data do servidor, lembrando que o parametro é case sensitive e contém diferença entre maiusculo e minusculo

echo date("d/m/Y");

echo "<br>";

// exemplo para trazer o dia e a hora, no caso do minuto é utilizado o i pois o m já é utilizado para o mes, como a próxima letra de minutos é o i é utilizado o mesmo
echo date("d/m/Y H:i:s");

echo "<br>";


// essa função retorna os segundos desde 01/01/1970
echo time();

echo "<br>";
// para trazer fixo uma data eu posso salvar o retorno do time em uma variavel e depois retornar a mesma após a formatação desejada conforme exemplo 
echo date("d/m/Y H:i:s", 1585598712);


 ?>