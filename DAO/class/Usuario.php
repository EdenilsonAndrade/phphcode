<?php 

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario($value){
		$this->idusuario = $value;
	}
	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;
	}
	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;
	}
	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}
	// função para retornar um registro filtrando por id
	public function loadById($id){
		// chamo a função sql
		$sql = new Sql();
		// crio minha consulta
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
		// faço uma validação para verificar se irá retornar informação
		if (count($results) > 0) {
			// se conter registro irá pegar o resultado e setar na variavel row
			$this->setData($results[0]);

		} else {

			echo "Não contém este id cadastrado!";
		}
	}
	// função para retornar uma lista de todos os usuários
	public static function getList(){
		// chamo a funçao sql
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}
	// função para filtrar por nome de usuário
	public static function search($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH'=>"%".$login."%"
		));
	}
	// metodo para filtrar mais do que um campo

	public function login($login, $password){

		$sql = new Sql();
		// crio minha consulta
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(":LOGIN"=>$login,
			":PASSWORD"=>$password
		));
		// faço uma validação para verificar se irá retornar informação
		if (count($results) > 0) {
			// se conter registro irá pegar o resultado e setar na variavel row
			$this->setData($results[0]);
			
		} else {

			throw new Exception("Login e/ou senha inválidos!");
			
		}
	}

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	// função para inserir usuário
	public function insert(){

		$sql = new Sql();
		// utilizado o método select para retonar o id que foi inserido na tabela
		$results = $sql->select("CALL sq_usuarios_insert(:LOGIN, :PASSWORD)", array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha()
		));

		if (count($results) > 0) {

			$this->setData($results[0]);
		}
	}

	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));

	}
}

 ?>