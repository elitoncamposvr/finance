
<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Configurações <i class="fas fa-angle-right fa-xs"></i> Métodos de Pagamentos <i class="fas fa-angle-right fa-xs"></i> Adicionar</h2>
	<span>
		<a class="btn" href="<?php echo BASE_URL; ?>financial/paymentmethods"><i class="fas fa-angle-double-left"></i> Voltar</a>
	</span>
</div>

<div class="content">


	<!-- Formulário de Edição (Edit Form)-->
	<form method="POST">
		<div class="table-line wrap">
			<div class="table-60 my-s mr-el">
				<label for="method">Método de Pagamento</label>
				<input type="text" class="table-100" name="method" id="method" required autofocus>
			</div>
			<div class="table-60 my-s">
				<label for="type_method">Tipo de Método</label>
				<select name="type_method" id="type_method" class="table-100">
				<option value="1">À Vista</option>
			<option value="2">A Prazo</option>
				</select>
			</div>
		</div>

		<!-- Botão (Button) -->
		<button class="btn mt-el" type="submit">
			Adicionar Método
		</button>
	</form>
</div>