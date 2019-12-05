<h2 class="title">Cadastrar</h2>

<form class="cadastro" action="<?= site_url('cadastro/cadastrar') ?>" method="post" enctype="multipart/form-data">
	<label for="nome">Nome*</label>
	<input type="text" id="nome" name="nome">

	<label for="sobrenome">Sobrenome*</label>
	<input type="text" id="sobrenome" name="sobrenome">

	<label for="rg">RG*</label>
	<input type="text" id="rg" name="rg">

	<label for="cpf">CPF*</label>
	<input type="text" id="cpf" name="cpf">

	<label for="endereco">Endereço*</label>
	<input type="text" id="endereco" name="endereco">

	<label for="cidade">Cidade*</label>
	<input type="text" id="cidade" name="cidade">

	<label for="cep">Cep*</label>
	<input type="text" id="cep" name="cep">

	<label for="email">Email*</label>
	<input type="text" id="email" name="email">

	<label for="telefone">Telefone*</label>
	<input type="text" id="telefone" name="telefone">

	<label for="senha">Senha*</label>
	<input type="password" id="senha" name="senha">

	<h3>Anexos:</h3>
	<ul class="anexo">
		<li class="botao_anexo">
			<!-- <a href="#">Comprovante de residência</a> -->
			<input type="file" placeholder="Comprovante de residencia" name="comprovante_residencia">
		</li>
		<li class="botao_anexo">
			<!-- <a href="#">Comprovante de salário/INSS</a> -->
			<input type="file" placeholder="Comprovante de salário/INSS" name=comprovante_salario>
		</li>
	</ul>

	<div class="botao_send">
		<input class="botao_enviar" type="submit">
	</div>
</form>