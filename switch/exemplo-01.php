<?php 

// retorna o dia da semana atual

$diaDaSemana = date("w");

// echo $diaDaSemana;

// o correto seria no case do 0 ao 6, porém por algum motivo está retornado o dia incorreto

switch ($diaDaSemana) {

	case 1;
	echo "Domingo";
	break;

	case 2;
	echo "Segunda-feira";
	break;

	case 3;
	echo "Terça-feira";
	break;

	case 4;
	echo "Quarta-feira";
	break;

	case 5;
	echo "Quinta-feira";
	break;

	case 6;
	echo "Sexta-feira";
	break;

	case 7;
	echo "Sábado";
	break;
}

echo "<br>";

// pode ser utilizado o default caso não fique com nenhuma das condições do case

$diaDaSemana = 8;

switch ($diaDaSemana) {

	case 1;
	echo "Domingo";
	break;

	case 2;
	echo "Segunda-feira";
	break;

	case 3;
	echo "Terça-feira";
	break;

	case 4;
	echo "Quarta-feira";
	break;

	case 5;
	echo "Quinta-feira";
	break;

	case 6;
	echo "Sexta-feira";
	break;

	case 7;
	echo "Sábado";
	break;

	default:
	echo "Data inválida!";
	break;
}

 ?>