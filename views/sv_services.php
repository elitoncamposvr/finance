	<!-- Breadcrumbs -->
	<div class="breadcrumb">
		<h2>Serviços</h2>
	</div>

	<div class="content">

		<!-- Botões (Buttons) -->
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

			<!-- Paginação (Pagination) -->
			<?php if ($p_count > 1) { ?>
				<div class="pagination">
					<a class="pag_item" href="<?php echo BASE_URL; ?>services?p=1">Primeira</a>
					<?php
					for ($q = $p - 3; $q <= $p - 1; $q++) {
						if ($q >= 1) { ?>
							<a class="pag_item" href="<?php echo BASE_URL; ?>services?p=<?php echo $q; ?>"><?php echo $q; ?></a>
					<?php }
					} ?>
					<div class="pag_item pag_active"><?php echo "$q"; ?></div>
					<?php for ($q = $p + 1; $q <= $p + 3; $q++) {
						if ($q <= $p_count) { ?>
							<a class="pag_item" href="<?php echo BASE_URL; ?>services?p=<?php echo $q; ?>"><?php echo $q; ?></a>
					<?php }
					}
					?>
					<a class="pag_item" href="<?php echo BASE_URL; ?>services?p=<?php echo $p_count; ?>">Última</a>
				</div>
			<?php } ?>


		<?php else : ?>
			<div class="flash_info my-x">
				<p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
			</div>
		<?php endif; ?>

	</div>

	<!-- Script Dropdown Itens -->
	<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>