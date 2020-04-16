<?php 

abstract class Animal {

	public function falar(){

		return "Som";
	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal {
	// aqui seria um polimorfismo pois o metodo falar já está na classe abstrata
	public function falar(){

		return "Late";

	}

}

class Gato extends Animal {

	public function falar(){

		return "Mia";
	}
}

class Passaro extends Animal {

	public function falar(){

		return "Canta";
	}

	public function mover(){
		// consigo tbm retornar a informação da classe pai utilizando a palavra reservada parente::mover() que neste caso o mover seria a função
		return "Voa e " . parent::mover();
	}
}

$pluto = new Cachorro();
// quando eu visualizo a mesma não retorna o som da classe abstrata e sim  o late da classe extendida
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "---------------------<br>";

$garfield = new Gato();
// quando eu visualizo a mesma não retorna o som da classe abstrata e sim  o late da classe extendida
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "---------------------<br>";

$ave = new Passaro();
// quando eu visualizo a mesma não retorna o som da classe abstrata e sim  o late da classe extendida
echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";

 ?>