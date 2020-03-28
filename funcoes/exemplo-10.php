<?php 

// exemplo de função anonima

function test($callback){

	// Processo lento, como por exemplo a conversão de um vídeo

	$callback();
}

// aqui seria só o exemplo de retornar uma mensagem, porém poderia ser um envio de e-mail informando ou algo do tipo

test(function(){

	echo "Terminou!";

});

 ?>