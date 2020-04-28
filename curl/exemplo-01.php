<?php 
// numero do cep
$cep = "89087177";
// no link informar a variavel do cep entre o ws e o json
$link = "https://viacep.com.br/ws/$cep/json/";
// inicia o curl
$ch = curl_init($link);
// aqui é encaminhado a solicitação para o webservise e informa que está esperando um retorno
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// desativa a validação do ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// executa
$response = curl_exec($ch);
// finaliza a conexão
curl_close($ch);
// transforma o retorno em um array
$data = json_decode($response, true);
// imprimi o array
print_r($data);
echo "<br>";
print_r($data["localidade"]);

 ?>