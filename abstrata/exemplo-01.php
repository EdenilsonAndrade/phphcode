<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

// aqui é criado uma classe abstrata Automovel implementando a interface Veiculo

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade){

		echo "O veículo acelerou até " . $velocidade . " Km/h <br>";

	}

	public function frenar($velocidade){

		echo "O veículo frenou até " . $velocidade . " Km/h <br>";
	}

	public function trocarMarcha($marcha){

		echo "O veículo engatou a marcha " . $marcha . "<br>";
	}

}

// aqui seria uma classe extendida da classe abstrata Automovel
class DelRey extends Automovel {

	public function empurar(){


	}

}

// não pode ser estanciado a classe Automovel pois iria ocorrer erro, sempre tem que ser declarado a classe que não é abstrata
$carro = new DelRey();

$carro->acelerar(200);

$carro->trocarMarcha(1);

$carro->frenar(20);

 ?>