<div class="content">
	<div class="breadcrumb">
		<h2>Escolas<i class="fas fa-angle-right fa-xs"></i>Editar</h2>

		<span>
			<a href="<?php echo BASE_URL; ?>schools"><i class="fas fa-angle-double-left"></i> Voltar</a>
		</span>
	</div>
	<!-- Message Error (Mensagem de Erro) -->
	<?php if (isset($error_msg) && !empty($error_msg)) : ?>
		<div class="flash_warning"><?php echo $error_msg; ?></div>
	<?php endif; ?>

	<!-- Formulário - Dados Pessoais (Form - Personal Data) -->
	<form method="POST" autocomplete="off">
		<div class="table-line">
			<div class="table-60 my-s space-input">
				<label for="school_name">Nome da Escola</label>
				<input class="w-100" type="text" name="school_name" value="<?php echo $school_info['school_name']; ?>" id="school_name" autofocus required>
			</div>
			<div class="table-40 my-s">
				<label for="head_school">Responsável</label>
				<input class="w-100" type="text" name="head_school" id="head_school" value="<?php echo $school_info['head_school']; ?>">
			</div>
		</div>

		<!-- Botões (Button) -->
		<div class="w-100 txt-center my-el">
			<button type="submit">
				Editar Piloto
			</button>
		</div>
	</form>
</div>