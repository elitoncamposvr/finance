<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Configurações <i class="fas fa-angle-right fa-xs"></i> Métodos de Pagamentos <i class="fas fa-angle-right fa-xs"></i> Editar</h2>
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
				<input type="text" class="table-100" name="method" id="method" value="<?php echo $payment_method_info['method']; ?>" required autofocus>
			</div>
			<div class="table-60 my-s">
				<label for="type_method">Tipo de Método</label>
				<select name="type_method" id="type_method" class="table-100">
					<option value="1" <?php echo ($payment_method_info['type_method'] == '1') ? 'selected="selected"' : ''; ?>>À Vista</option>
					<option value="2" <?php echo ($payment_method_info['type_method'] == '2') ? 'selected="selected"' : ''; ?>>A Prazo</option>
				</select>
			</div>
		</div>

		<!-- Botão (Button) -->
		<button class="btn mt-el" type="submit">
			Editar Método
		</button>
	</form>
</div>