<div class="breadcrumb">
	<h2>Clientes<i class="fas fa-angle-right fa-xs"></i>Resultados da Pesquisa</h2>

	<span>
		<a class="btn" href="<?php echo BASE_URL; ?>clients"><i class="fas fa-angle-double-left"></i> Voltar</a>
	</span>
</div>

<div class="content">

	<!-- Botões (Buttons) -->
	<div class="menu_data">
		<div class="menu_data--left">
			<?php if ($edit_permission) : ?>
				<div>
					<a class="btn btn--data-menu" href="<?php echo BASE_URL; ?>clients/add">Novo</a>
				</div>
			<?php endif; ?>
			<div>
			<a href="<?php echo BASE_URL; ?>clients/searchadvanced" class="btn btn--data-menu_search-left">Busca Avançada</a>
			</div>
		</div>
		<div class="menu_data--right">
			<div class="btn--data-menu_search-right">
				<a href="<?php echo BASE_URL; ?>clients/searchadvanced" class="btn">Busca Avançada</a>
			</div>
			<form class="form-search-right" action="<?php echo BASE_URL; ?>clients/search">
				<span class="mb-2 w-100"><input type="text" class="w-100" name="sp" id="sp" placeholder="Pesquisar Cliente" required></span>
			</form>
		</div>
	</div>

	<!-- Cabeçalho da Tabela (Table Header) -->
	<?php if ($clients_list) : ?>
		<div class="table_header">
			<div class="w-30">Nome</div>
			<div class="w-20">CPF/CNPJ</div>
			<div class="w-20">Telefone</div>
			<div class="w-20">Celular</div>
			<div class="w-10"></div>
		</div>


		<!-- Dados da Tabela (Table Data) -->
		<?php foreach ($clients_list as $c) : ?>
			<div class="table_data">
				<div class="table-30"><span class="table-title-mobile">Nome:</span><?php echo $c['client_name']; ?></div>
				<div class="table-20"><span class="table-title-mobile">CPF/CNPJ:</span><?php echo $c['cpf']; ?></div>
				<div class="table-20"><span class="table-title-mobile">Telefone:</span><?php echo $c['phone']; ?></div>
				<div class="table-20"><span class="table-title-mobile">Celular:</span><?php echo $c['cellphone']; ?></div>
				<div class="table-10 table-options txt-right">
					<div class="dropdown">
						<i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
						<div id="myDropdown1" class="dropdown-content">
							<?php if ($edit_permission) : ?>
								<ul>
									<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>clients/edit/<?php echo $c['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
									<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>clients/delete/<?php echo $c['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
									<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>clients/view/<?php echo $c['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
								</ul>
							<?php else : ?>
								<ul>
									<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>clients/view/<?php echo $c['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>


	<?php else : ?>
		<div class="flash_info my-2">
			<p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
		</div>
		<div class="search_pg">
			<form class="w-100" action="<?php echo BASE_URL; ?>clients/search">
				<p class="mb-l">Refaça sua pesquisa</p>
				<span class="mb-2"><input type="text" class="input-field-search" name="sp" id="sp" placeholder="Pesquisar Cliente" required></span>
				<span><button type="submit"><i class="fas fa-search"></i> Pesquisar</button></span>
			</form>
		</div>
	<?php endif; ?>

</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>