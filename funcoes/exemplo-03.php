<?php 

// exemplo de parametro definido dentro do () após a função, neste caso o texto irá receber o que estiver no echo da função ola dentro do ()

function ola($texto){

	return "Olá $texto!<br>";
}

echo ola("mundo");
echo ola("Glaucio");
echo ola("João");

// posso definir tbm um valor padrão para o parametro e se quiser retornar o mesmo utilizar o echo na função e dentro do () deixar vazio, com isso irá retornar o valor padrão

function ola1($texto = "mundo"){

	return "Olá $texto!<br>";
}

echo ola1();
echo ola1("Glaucio");
echo ola1("João");

// se utilizar um valor padrão para o parametro para não levar vazio basta informar na função apenas ""

echo ola1("");

// exemplo com dois parametros na mesma função, poderá utilizar quantos parametros forem necessários separando sempre por virgula
// para alterar o valor padrão do segundo parametro eu posso alterar o resultado do segundo campo após a virgula

function ola2($texto = "mundo", $periodo = "Bom dia!"){

	return "Olá $texto! $periodo<br>";
}

echo ola2();
echo ola2("Glaucio","Boa noite!");
echo ola2("João", "");
// se utilizar um valor padrão para o parametro para não levar vazio basta informar na função apenas ""
echo ola2();

// uma boa prática que deve ser utilizada é se algum parametro não conter valor padrão sempre trazer o mesmo no inicio, e se acaso não for informado nenhum valor para este parametro irá dar erro

 ?>