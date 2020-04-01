<?php 

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	// o get pega o valor
	public function getModelo(){

		return $this->modelo;

	}

	// o set recebe o valor
	public function setModelo($modelo){
		// no exemplo abaixo o atributo recebe o valor do parametro
		$this->modelo = $modelo;

	}
	// por padrão iria como varchar, porém posso alterar a utilizando o :float para o tipo ficar float
	public function getMotor():float{
		// pode ser colocado tbm validação dentro do get, como por exemplo só pode ser informado motor maior que 1.0, ou se o modelo for gol irá receber valor apenas de 1.0 a 2.0
		return $this->motor;

	}

	public function setMotor($motor){

		$this->motor = $motor;

	}
	// por padrão iria como varchar, porém posso alterar a utilizando o :int para o tipo ficar int

	public function getAno():int{

		return $this->ano;

	}

	public function setAno($ano){

		$this->ano = $ano;
	}
	
	// metodo exibir para mostrar todas as informações do veiculo

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}

}

$gol = new Carro();
// se tentar informar o valor do modelo como exemplo sendo que a classe é privada irá retornar um erro fatal
// $gol->modelo = "Gol GT";
// o correto é utilizar o set para inserir a informação no metodo
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

// o $gol seria o objeto que esta instanciado com a classe carro e busco a função exibir

print_r($gol->exibir());
echo "<br>";
// para retornar o tipo de cada campo pode ser utilizido var_dump
var_dump($gol->exibir());
 ?>