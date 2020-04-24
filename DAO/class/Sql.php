<?php 

// aqui defino que a classe Sql extende da classe PDO para já ter acesso aos recursos da classe PDO como por exemplo, prepare, execute, bindParam....
class Sql extends PDO {

	private $conn;
	// conexão com o banco de dados
	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
	}
	// defino o bindParam para não precisar criar o mesmo manualmente
	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			// está sendo utilizado a função setParam
			$this->setParam($statement, $key, $value);
		}

	}
	// função setParam para armazenar os valores dos parametros
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);
	}
	// metodo para delete ou update ou insert, que não seria necessário ter algum retorno
	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
		
	}
	// metodo para select
	public function select($rawQuery, $params = array()):array{

		// chamo o método query pois o mesmo já contém o prepare e os parametros
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

 ?>