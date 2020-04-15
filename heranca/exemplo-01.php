<?php 

class Documento {

	private $numero;

	public function getNumero() {

		return $this->numero;
	}

	public function setNumero($n) {

		$resultado = Documento::validar($n);
 
		if($resultado === false){
 
			throw new Exception("CPF informado não é válido", 1);
		}
		$this->numero = $n;
		 
		}
		 
				 
		public static function validar($cpf):bool
		{
		 
			 
		if(empty($cpf)) {
		 
		        return false;
		 
		    }
		 
		//elimina possivel marca
		 
		    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
			$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		 
		     
		 
		    //verifica se o numero de digitos informado é igual a 11
		 
		    if (strlen($cpf) != 11) {
		 
		        echo "length";
		 
		        return false;
		 
		    }
		 
		    //verifica se nenhuma das sequencias invalidas abaixo
		 
		// foi digitado. Caso afirmativo. retorna falso
		 
		    else if ($cpf == '00000000000' ||
		 
		        $cpf == '11111111111' ||
		 
		        $cpf == '22222222222' ||
		 
		        $cpf == '33333333333' ||
		 
		        $cpf == '44444444444' ||
		 
		        $cpf == '55555555555' ||
		 
		        $cpf == '66666666666' ||
		 
		        $cpf == '77777777777' ||
		 
		        $cpf == '88888888888' ||
		 
		        $cpf == '99999999999') {
		 
		        return false;
		 
		//calcula os digitos verificados para verificar se o
		 
		//cpf é válido
		 
		 
		 
		} else {   
		 
		         
		 
		for ($t = 9; $t < 11; $t++) {
		 
		             
		 
		for ($d = 0, $c = 0; $c < $t; $c++) {
		 
		                $d += $cpf{$c} * (($t + 1) - $c);
		 
		            }
		 
		            $d = ((10 * $d) % 11) % 10;
		 
		            if ($cpf{$c} != $d) {
		 
		                return false;
		 
		            }
		 
		        }
		 
		        return true;
		 
		}

		
		
		
	}

}

// classe filho da classe documento
// class CPF extends Documento {

// 	public function validar():bool {

// 		// aqui poderia trazer a validação do cpf validação do cpf

// 		// return true;
// 		// não deu certo buscando para validar o cpf, será necessário analisar
// 		// require_once "../POO/validação_cpf.php";

		
// 	}
// }

$doc = new Documento();

$doc->setNumero("055.358.459-65");

echo $doc->getNumero();

 ?>