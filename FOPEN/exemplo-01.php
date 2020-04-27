<?php 

// o primeiro parametro seria o diretório com o nome do arquivo, se acaso o arquivo estiver na mesma pasta é só informar o nome do mesmo. O segundo parametro serio o que será feito com o mesmo, isso contém detalhado na documentação, pederia ser apenas leitura, ou leitura com alteração....
$file = fopen("log.txt", "a+");
$email = "edenilsonbass@hotmail.com";

// a função fwrite seria para inserir as informações no arquivo, essa função espera dois parametros, o nome do arquivo e o que vai ser inserido. Está concatenando com o \r e \n para quebrar a linha
fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fwrite($file, "Solicito um orçamento"  . "\r\n");
fwrite($file, "E-mail para contato: "  . $email . "\r\n");
// para fechar o arquivo é necessário utilizar a função fclose para fechar o mesmo após fazer as alterações necessárias. Espera um parametro que seria o nome
fclose($file);

echo "Arquivo criado com sucesso!";

 ?>