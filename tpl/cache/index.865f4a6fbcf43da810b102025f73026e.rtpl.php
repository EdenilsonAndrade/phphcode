<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- entre {} informo o nome da variavel que está no arquivo index.php no $tpl->assign( "nome da variavel", "valor da variavel" ); para retornar o valor  -->
<h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de template!</p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

