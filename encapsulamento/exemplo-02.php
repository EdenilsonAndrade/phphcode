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

// é utilizado o extends para dizer que a classe Programador irá herdar tudo da classe Pessoa, exceto o que for privado
class Programador extends Pessoa {


}

$objeto = new Programador();

// neste exemplo irá retornar todas as informações pois o metodo verDados é publico
$objeto->verDados();


// porém se criar um método filho e recriar o método verDados dentro do método filho irá retornar erro pois o private estará fora da classe
class Programador1 extends Pessoa {

	public function verDados(){

		// para saber de qual classe que está buscando
		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

}

$objeto = new Programador1();

// neste exemplo irá retornar todas as informações pois o metodo verDados é publico
$objeto->verDados();


 ?>