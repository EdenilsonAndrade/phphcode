<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;
// exemplo de método construtor para receber os valores padrões de logradouro, numero, cidade, isso sem precisar criar os get e set de cada um. O nome dos parametros não precisam ser o nome das variaveis, como no exemplo que está a, b, c.
	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}
// o destruct poderá ser utilizado quando precisar apagar a informação de uma váriavel ou quando for encerrado a sessão
	public function __destruct(){

		var_dump("DESTRUIR");

	}
// o metodo toString é utilizado para transformar um objeto em uma variável, irá chamar este método quando utilizar a echo para retornar um objeto
	public function __toString(){

		return $this->logradouro.", ".$this->numero." - ".$this->cidade;
	}
}

// utilizando o new o php já chama automaticamente o metodo mágico construct
$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

var_dump($meuEndereco);

echo "<br>";

// como foi utilizado a função toString irá chamar a mesma pois está sendo utilizado um echo chamando um objeto
echo $meuEndereco;

echo "<br>";

// unset poderá ser utilizado para chamar o metodo destruct
unset($meuEndereco);

 ?>