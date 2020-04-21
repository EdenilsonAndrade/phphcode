<?php 
// aqui irei informar o nome da pasta que está o arquivo
namespace Cliente;

// como a classe Cadastro e uma filha da Cadastro de uma pasta anterior então é informado uma barra invertida antes da classe extendida para voltar uma pasta
class Cadastro extends \Cadastro  {

	public function registrarVenda(){

		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}

 ?>