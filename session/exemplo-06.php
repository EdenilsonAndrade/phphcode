<?php 

// exemplo de como encontrar o caminho onde está gravando os dados da sessão

require_once("config.php");

echo session_save_path();

echo "<br>";

// para retornar o status da sessão

var_dump(session_status());

echo "<br>";

echo session_status();

echo "<br>";

// utilizando o switch case para retornar o status da sessão

switch(session_status()) {
	
	case PHP_SESSION_DISABLED:
	echo "as sessões estiverem desabilitadas";
	break;

	case PHP_SESSION_NONE:
	echo "as sessões estiverem habilitadas, mas nenhuma existir";
	break;

	case PHP_SESSION_ACTIVE:
	echo "as sessões estiverem habilitadas, e uma existir";
	break;	
	
}

 ?>