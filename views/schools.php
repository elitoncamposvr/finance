<div class="content">
	<div class="breadcrumb">
		<h2>Escolas</h2>
	</div>

	<!-- Botões (Buttons) -->
	<div class="menu_data">
		<div class="menu_data--left">
			<div>
				<a class="btn btn--data-menu" href="<?php echo BASE_URL; ?>schools/create">Novo</a>
			</div>
		</div>
		<div class="menu_data--right">
			<form class="form-search-right" action="<?php echo BASE_URL; ?>schools/search">
				<span class="mb-2 w-100"><input type="text" class="w-100" name="sp" id="sp" placeholder="Pesquisar Escola" required></span>
			</form>
		</div>
	</div>

	<!-- Cabeçalho da Tabela (Table Header)-->
	<?php if ($school_list) : ?>
		<div class="table_header">
			<div class="table-60">Nome</div>
			<div class="table-30">Responsável</div>
			<div class="table-10"></div>
		</div>

		<!-- Dados da Tabela (Data Table)-->
		<?php foreach ($school_list as $school) : ?>
			<div class="table_data">
				<div class="table-60"><span class="table-title-mobile">Nome da Escola:</span><?php echo $school['school_name']; ?></div>
				<div class="table-30"><span class="table-title-mobile">Responsável:</span><?php echo $school['head_school']; ?></div>
				<div class="table-10 table-options txt-right">
					<div class="dropdown">
						<i class="fas fa-ellipsis-h dropbtn btn-awesome" onclick="myFunction(this);"></i>
						<div id="myDropdown1" class="dropdown-content">
							<ul>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schools/update/<?php echo  $school['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schools/destroy/<?php echo  $school['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>


		<?php if ($p_count > 1) { ?>
			<div class="pagination">
				<a class="pag_item" href="<?php echo BASE_URL; ?>schools?p=1">Primeira</a>
				<?php
				for ($q = $p - 3; $q <= $p - 1; $q++) {
					if ($q >= 1) { ?>
						<a class="pag_item" href="<?php echo BASE_URL; ?>schools?p=<?php echo $q; ?>"><?php echo $q; ?></a>
				<?php }
				} ?>
				<div class="pag_item pag_active"><?php echo "$q"; ?></div>
				<?php for ($q = $p + 1; $q <= $p + 3; $q++) {
					if ($q <= $p_count) { ?>
						<a class="pag_item" href="<?php echo BASE_URL; ?>schools?p=<?php echo $q; ?>"><?php echo $q; ?></a>
				<?php }
				}
				?>
				<a class="pag_item" href="<?php echo BASE_URL; ?>schools?p=<?php echo $p_count; ?>">Última</a>
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