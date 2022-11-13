<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Serviços<i class="fas fa-angle-right fa-xs"></i>Resultado da Pesquisa</h2>
	<span>
		<a class="btn" href="<?php echo BASE_URL; ?>services"><i class="fas fa-angle-double-left"></i> Voltar</a>
	</span>
</div>

<div class="content">

	<!-- Botões -->
	<div class="menu_data">
		<div class="menu_data--left">
			<?php if ($edit_permission) : ?>
				<div>
					<a class="btn btn--data-menu" href="<?php echo BASE_URL; ?>services/add">Novo</a>
				</div>
			<?php endif; ?>
		</div>
		<div class="menu_data--right">
			<form class="form-search-right" action="<?php echo BASE_URL; ?>services/search">
				<span class="mb-2 w-100"><input type="text" class="w-100" name="sp" id="sp" placeholder="Pesquisar Serviço" required></span>
			</form>
		</div>
	</div>

	<!-- Cabeçalho Tabela (Table Header) -->
	<?php if ($services_list) : ?>
		<div class="table_header">
			<div class="table-40">Serviço</div>
			<div class="table-20">Custo</div>
			<div class="table-20">Venda</div>
			<div class="table-15">Hora Padrão</div>
			<div class="table-5"></div>
		</div>

		<!-- Dados da Tabela (Data Table)-->
		<?php foreach ($services_list as $services) : ?>
			<div class="table_data">
				<div class="table-40"><span class="table-title-mobile">Serviço:</span><?php echo $services['name_service']; ?></div>
				<div class="table-20"><span class="table-title-mobile">Custo:</span>R$ <?php echo number_format($services['standard_value'], 2, ',', '.'); ?></div>
				<div class="table-20"><span class="table-title-mobile">Venda:</span>R$ <?php echo number_format($services['sale_value'], 2, ',', '.'); ?></div>
				<div class="table-15"><span class="table-title-mobile">Hora Padrão:</span><?php echo date('h:i', strtotime($services['time_standard'])); ?></div>
				<div class="table-5 table-options txt-right">
					<div class="dropdown">
						<i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
						<div id="myDropdown1" class="dropdown-content">

							<ul>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>services/edit/<?php echo $services['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>services/delete/<?php echo $services['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
							</ul>

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
			<form class="w-100" action="<?php echo BASE_URL; ?>services/search">
				<p class="mb-l">Refaça sua pesquisa</p>
				<span class="mb-2"><input type="text" class="input-field-search" name="sp" id="sp" placeholder="Pesquisar Serviço" required></span>
				<span><button type="submit"><i class="fas fa-search"></i> Pesquisar</button></span>
			</form>
		</div>
	<?php endif; ?>

</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>