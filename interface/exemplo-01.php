<?php 

// para criar uma interface utiliza a palavra reservada
interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

// aqui estaria criando a classe civic implementando a interface veiculo informando as funções da interface
// neste caso foi utilizado apenas uma interface, mas se acaso precisasse implementar mais do que uma era só por , e acrescentar, exemplo: Veiculo, multas, seguro....
class Civic implements Veiculo {

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

$carro = new Civic();

$carro->trocarMarcha(1);

$carro->frenar(20);

$carro->acelerar(150);
 
 ?>
