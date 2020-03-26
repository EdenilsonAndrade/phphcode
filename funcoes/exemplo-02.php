<?php 

// exemplo de utilizar uma função para ter registrado o salário minimo para quando necessário retornar a informação, como no exemplo o José recebeu 3 salários 
// usei tbm a função number_format para formatar o resultado para trazer em moeda 

function salario(){

	return 946.00;
}

echo "José receber 3 salários: "."R$ ".number_format((salario()*3),2,',','.');

 ?>