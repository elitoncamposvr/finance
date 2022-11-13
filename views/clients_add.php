<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Clientes<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>

	<span>
		<a class="btn" href="<?php echo BASE_URL; ?>clients"><i class="fas fa-angle-double-left"></i> Voltar</a>
	</span>
</div>

<div class="content">
	<!-- Message Error (Mensagem de Erro) -->
	<?php if (isset($error_msg) && !empty($error_msg)) : ?>
		<div class="flash_warning"><?php echo $error_msg; ?></div>
	<?php endif; ?>

	<!-- Formulário - Dados Pessoais (Form - Personal Data) -->
	<form method="POST" autocomplete="off">
		<div class="table-line">
			<div class="table-50 my-s mr-m">
				<label for="client_name">Nome</label>
				<input class="w-100" type="text" name="client_name" id="client_name" autofocus>
			</div>
			<div class="table-50 my-s">
				<label for="email">Email</label>
				<input class="w-100" type="text" name="email" id="email">
			</div>
		</div>

		<!-- Telefones (Phones) -->
		<div class="table-line">
			<div class="table-35 my-s mr-m">
				<label for="phone">Telefone</label>
				<input class="w-100" type="text" name="phone" id="phone">
			</div>
			<div class="table-30 my-s mr-m">
				<label for="cellphone">Celular</label>
				<input class="w-100" type="text" name="cellphone" id="cellphone">
			</div>
			<div class="table-35 my-s">
				<label for="whatsapp">WhatsApp</label>
				<input class="w-100" type="text" name="whatsapp" id="whatsapp">
			</div>
		</div>

		<!-- Documentos Pessoais (Personal Documents) -->
		<div class="table-line">
			<div class="table-35 my-s mr-m">
				<label for="cpf" class="cpf">CPF</label>
				<input class="cpf w-100" type="text" name="cpf" id="cpf" placeholder="CPF">
			</div>
			<div class="table-35 my-s mr-m">
				<label for="rg">RG</label>
				<input class="w-100" type="text" name="identity" id="identity">
			</div>
			<div class="table-30 my-s">
				<label for="birth_date">Data Nascimento</label>
				<input class="w-100" type="text" name="birth_date" id="birth_date">
			</div>
		</div>

		<!-- Dados Adicionais (Optional Data) -->
		<div class="w-100">
			<label for="aditional_info">Observações</label>
			<textarea name="aditional_info" id="aditional_info" class="w-100"></textarea>
		</div>

		<!-- Endereço (Adress) -->
		<h2 class="w-100 spt my-l">Endereço</h2>
		<div class="table-line">
			<div class="table-25 my-s mr-m">
				<label for="address_zipcode">CEP</label>
				<input type="text" class="w-100" name="address_zipcode" id="address_zipcode" onblur="pesquisacep(this.value);">
			</div>
			<div class="table-50 my-s mr-m">
				<label for="rg">Rua</label>
				<input class="w-100" type="text" name="address" id="address">
			</div>
			<div class="table-25 my-s">
				<label for="address_number">Número</label>
				<input class="w-100" type="text" name="address_number" id="address_number">
			</div>
		</div>
		<div class="table-line">
			<div class="table-35 my-s mr-m">
				<label for="address2">Complemento</label>
				<input type="text" class="w-100" name="address2" id="address2">
			</div>
			<div class="table-25 my-s mr-m">
				<label for="address_neighb">Bairro</label>
				<input type="text" class="w-100" name="address_neighb" id="address_neighb">
			</div>
			<div class="table-25 my-s mr-m">
				<label for="address_city">Cidade</label>
				<input type="text" class="w-100" name="address_city" id="address_city">
			</div>
			<div class="table-15 my-s">
				<label for="address_state">Estado</label>
				<input type="text" class="w-100" name="address_state" maxlength="2" id="address_state">
			</div>
		</div>

		<!-- Botões (Button) -->
		<div class="w-100 txt-center my-el">
			<button type="submit">
				Adicionar Cliente
			</button>
		</div>
	</form>
</div>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/general_mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/change_items.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/cep.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>