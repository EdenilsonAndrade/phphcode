<?php 

date_default_timezone_set("America/Sao_Paulo");

// trazer a data atual
$dt = new DateTime();
// intervalo de 15 dias, porém pode ser alterado para agregar mes, ano, semana
$periodo = new DateInterval("P15D");
// retorna a data atual
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// adiciona a data atual o periodo que neste caso é de 15 dias
$dt->add($periodo);
// retorna a data atual agregando o periode que é de 15 dias
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// periodo de uma ano
$periodo = new DateInterval("P1Y");
// retorna a data atual
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// adiciona a data atual o periodo que neste caso é 1 ano
$dt->add($periodo);
// retorna a data atual agregando o periode que é de 1 ano
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// periodo de uma semana
$periodo = new DateInterval("P1W");
// retorna a data atual
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// adiciona a data atual o periodo que neste caso é 1 semana
$dt->add($periodo);
// retorna a data atual agregando o periode que é de 1 semana
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// periodo de um mes
$periodo = new DateInterval("P1M");
// retorna a data atual
echo $dt->format("d/m/Y H:i:s");

echo "<br>";
// adiciona a data atual o periodo que neste caso é 1 mes
$dt->add($periodo);
// retorna a data atual agregando o periode que é de 1 mes
echo $dt->format("d/m/Y H:i:s");
 ?>