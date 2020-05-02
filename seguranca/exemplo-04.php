<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- no action está sendo informado que será encaminhado a informação para o cadastrar.php e o mesmo irá receber a informação no name do input -->
 <form action="cadastrar.php" method="post">
 	<!-- no data-sitekey irá a chave que o google irá gerar -->
 	<div class="g-recaptcha" data-sitekey="6LdwffEUAAAAAFAi8ImttSM9WmAMSmTCE1jkuCvw"></div>
 	<input type="email" name="inputEmail">
 	<button type="submit">Enviar</button>

 </form>