<?php 

// exemplo para fazer um campo que o usuário pode selecionar

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"

 ?>