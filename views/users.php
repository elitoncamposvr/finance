<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Configurações<i class="fas fa-angle-right fa-xs"></i>Usuários</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>settings/users"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

<!-- Botões (Buttons) -->
	<div class="menu_data">
		<div class="menu_data--left">
				<div>
					<a class="btn btn--data-menu" href="<?php echo BASE_URL; ?>users/add">Novo</a>
				</div>
		</div>
	</div>

	<!-- Cabeçalho da Tabela (Table Header) -->
	<div class="table_header">
		<div class="table-35">Email/Login</div>
		<div class="table-30 txt-center">Nome de Usuário</div>
		<div class="table-30 txt-center">Grupo de Permissões</div>
		<div class="table-5"></div>
	</div>

	<!-- Dados da Tabela (Table Data) -->
	<?php foreach ($users_list as $us) : ?>
		<div class="table_data">
			<div class="table-35"><?php echo $us['email']; ?></div>
			<div class="table-30 txt-center"><?php echo $us['name_user']; ?></div>
			<div class="table-30 txt-center"><?php echo $us['name']; ?></div>
			<div class="table-5 table-options txt-right">
			<div class="dropdown">
						<i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
						<div id="myDropdown1" class="dropdown-content">
							<ul>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>users/edit/<?php echo $us['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>users/delete/<?php echo $us['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
							</ul>
						</div>
					</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>