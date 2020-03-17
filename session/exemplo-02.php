<?php 

require_once("config.php");

echo $_SESSION['nome'];

echo "<br>";

// para apagar uma sessão poderá utilizar o comando unset e informar dentro do [o nome da sessão] ou deixar vazio para eliminar todas as sessões 

unset($_SESSION['nome']);

echo $_SESSION['nome'];


// existe tbm o comando abaixo a diferença entre o unset e o session_destroy é que o unset remove apenas a sessão porém o usuário atualizando a pagina irá iniciar novamente a sessão com o mesmo nome, porém o session_destroy remove a sessão e apaga o usuário, quando o usuário atualizar a página irá iniciar com um novo nome

session_destroy();

 ?>