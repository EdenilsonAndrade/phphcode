<?php 
// para transformar um json em array

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

// para transformar em array utilizar o parametro true se não irá levar como  objeto

$data = json_decode($json, true);

var_dump($data);

echo "<br>";

// para levar como objeto utilizar sem o true

$data = json_decode($json);

var_dump($data);

 ?>