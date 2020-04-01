<?php 
// para classe sempre a primeira letra de cada palavra será maiuscula

class Pessoa {

	// dentro da classe posso criar um atributo, como se fosse uma variavel
	// o public é utilizado para ser publico, então poderá ser utilizado chamando o mesmo fora da classe tbm
	public $nome;

	// posso criar tbm uma método, como se fosse uma funçao

	public function falar(){
		// $this é utilizado no lugar do $ para chamar o atributo, é utilizado apenas dentro do método, se for fora do método chama normal
		return "O meu nome é ".$this->nome;

	}

}


// crio um objeto com a classe Pessoa
$glaucio = new Pessoa();
// atribuo para o atributo nome a informação Glaucio Daniel
$glaucio->nome = "Glaucio Daniel";
// retorno a informação do método
echo $glaucio->falar();

 ?>