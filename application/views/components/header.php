<nav>
	<h1 class="maintitle"><a href="index.html">e-HelpUs</a></h1>
<?php
	if (!$this->guard->logged()):

?>
	<form class="login" action="<?= site_url('login/logar') ?>" method="POST">
		<label for="email">E-mail:</label>
		<input type="text" id="email" name="email">

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha">

		<input class="enviar" type="submit">
		<a href="<?= site_url('cadastro') ?>">Cadastre-se</a>
	</form>
<?php
	else:
?>
	<h1>Bem-vindo!</h1>
<?php
	endif;
?>
</nav>