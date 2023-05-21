<div class="content">
	<div class="breadcrumb">
		<h2>Usuários<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>
		<span>
			<a href="<?php echo BASE_URL; ?>users"><i class="fas fa-angle-double-left"></i> Voltar</a>
		</span>
	</div>

	<!-- Formulário de Adição (Add Form) -->
	<form method="post">
		<div class="table-line">
			<div class="table-50 my-s space-input">
				<label for="name_user">Nome de Usuário</label>
				<input type="text" name="name_user" id="name_user" required class="w-100" autofocus>
			</div>
			<div class="table-50 my-s">
				<label for="email">E-mail</label>
				<input type="email" name="email" id="email" required class="w-100">
			</div>
		</div>
		<div class="table-line">
			<div class="table-50 my-s space-input">
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" required class="w-100">
			</div>
			<div class="table-50 my-s">
				<label for="school_id">Nome da Escola</label>
				<select name="school_id" id="school_id" class="w-100">
					<?php foreach ($schools_list as $schools) : ?>
						<option value="<?php echo $schools['id']; ?>"><?php echo $schools['school_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="table-center">
			<button type="submit" class="my-el">
				Adicionar Usuário
			</button>
		</div>
	</form>
</div>