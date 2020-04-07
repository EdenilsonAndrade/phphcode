<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$objeto = new Pessoa();

// como o nome é publico irá retornar a informação sem problema
echo $objeto->nome . "<br>";
// se tentar acessar a idade irá retornar erro, pois só pode acessar que estiver dentro da própria classe ou quem herda
// echo $objeto->idade . "<br>";
// o privado tbm irá ocorrer erro, o privado nem o herdeiro pode acessar
// echo $objeto->senha . "<br>";

// neste caso retorna as informações pois dentro da classe foi criado um método publico verDados como todas as informações
$objeto->verDados();
 ?>