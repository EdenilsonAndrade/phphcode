<?php 

date_default_timezone_set("America/Sao_Paulo");

// essa função poderá ser utilizada para trazer os segundos da data informada desde 01/01/1970 que seria o timestamp

echo strtotime("2001-09-11");

// setando a mesma informação para uma variavel

$ts = strtotime("2001-09-11");

echo "<br>";

// retornado a data da variável $ts
echo date("l, d/m/Y H:i:s", $ts);

echo "<br>";

// essa função strtotime recebe tbm variaveis como o exemplo now que tras a informação atual

$ts = strtotime("now");

echo date("l, d/m/Y H:i:s", $ts);

echo "<br>";

// essa função acrescenta um dia na data atual

$ts = strtotime("+1 day");

echo date("l, d/m/Y H:i:s", $ts);

echo "<br>";

// essa função acrescenta uma semana da data atual

$ts = strtotime("+1 week");

echo date("l, d/m/Y H:i:s", $ts);

echo "<br>";

// pode ser acrescentado tbm mais de uma informação como o exemplo que está colcando uma semana a mais e um ano a mais

$ts = strtotime("+1 week, +1 year");

echo date("l, d/m/Y H:i:s", $ts);

 ?>