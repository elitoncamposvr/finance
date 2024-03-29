<div class="content">
	<div class="breadcrumb">
		<h2>Usuários<i class="fas fa-angle-right fa-xs"></i>Editar</h2>
		<span>
			<a href="<?php echo BASE_URL; ?>users"><i class="fas fa-angle-double-left"></i> Voltar</a>
		</span>
	</div>
	<!-- Mensagem de Erro (Error Message) -->
	<?php if (isset($error_msg) && !empty($error_msg)) : ?>
		<div class="flash_warning"><?php echo $error_msg; ?></div>
	<?php endif; ?>

	<div class="data_info">
		<p>
			<?php if ($user_info['status'] == '1') {
				echo '<span class="badge badge-success">Ativo</span>';
			} else {
				echo '<span class="badge badge-canceled">Bloqueado</span>';
			}
			?>
		</p>
		<span>
			<?php if ($user_info['status'] == '1') : ?>
				<a href="<?php echo BASE_URL; ?>users/block/<?php echo $user_info['id']; ?>" class="btn-sec">Bloquear</a>
			<?php else : ?>
				<a href="<?php echo BASE_URL; ?>users/unblock/<?php echo $user_info['id']; ?>" class="btn-sec">Desbloquear</a>
			<?php endif; ?>
		</span>
	</div>

	<!-- Formulário de Adição (Add Form) -->
	<form method="post">
		<div class="table-line">
			<div class="table-50 my-s space-input">
				<label for="name_user">E-mail de Usuário</label>
				<input type="email" name="email" id="email" required class="w-100" value="<?php echo $user_info['email']; ?>" autofocus>
			</div>
			<div class="table-50 my-s space-input">
				<label for="name_user">Nome de Usuário</label>
				<input type="text" name="name_user" id="name_user" required class="w-100" value="<?php echo $user_info['name_user']; ?>" autofocus>
			</div>

		</div>
		<div class="table-line">
			<div class="table-50 my-s space-input">
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" class="w-100">
			</div>
			<div class="table-50 my-s">
				<label for="school_id">Nome da Escola</label>
				<select name="school_id" id="school_id" class="w-100">
					<?php foreach ($schools_list as $schools) : ?>
						<option value="<?php echo $schools['id']; ?>" <?php if ($user_info['school_id'] == $schools['id']) {
																			echo 'selected="selected"';
																		} ?>><?php echo $schools['school_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="table-center">
			<button type="submit" class="my-el">
				Editar Usuário
			</button>
		</div>
	</form>
</div>