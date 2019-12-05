<h2 class="title">Solicitação de financiamento</h2>

<form class="cadastro" action="<?= site_url('mensagem/enviar_msg') ?>" method="post">

	<?php

		if($this->session->flashdata('retorno')):

			echo $this->session->flashdata('retorno');
			
		endif;
			

	?>

	<label for="nome">Nome/link do curso*</label>
	<input type="text" id="nome" name="nome_link">

	<label for="pgto">Forma de pagamento*</label>
	<select id="status" name="forma_de_pagamento">
		<option></option>
		<option>Entrada + 5x</option>
		<option>Entrada + 10x</option>
		<option>Entrada + 12x</option>
		<option>10x</option>
		<option>20x</option>
		<option>Outros</option>
	</select>

	<label for="outro">OUTRO. Explique a sua forma de pagamento</label>
	<input type="text" id="outro" name="outro">

	<label for="obs">Observações</label>
	<input type="text" id="obs" name="observacoes">
	
	<div class="botao_send">
		<input class="botao_enviar" type="submit">
	</div>
</form>