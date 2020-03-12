<?php 

// date("Y") retorna o ano atual
// exemplo de for para trazer os ultimos 100 anos

for ($i=date("Y"); $i > date("Y")-100; $i--) { 
	
	echo $i . "<br>";

}

 ?>