<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Configurações <i class="fas fa-angle-right fa-xs"></i> Métodos de Pagamentos</h2>
	<span>
		<a class="btn" href="<?php echo BASE_URL; ?>financial/settings"><i class="fas fa-angle-double-left"></i> Voltar</a>
	</span>
</div>

<div class="content">

	<!-- Botões (Buttons) -->
	<div class="menu_data">
		<div class="menu_data--left">
			<div>
				<a class="btn btn--data-menu" href="<?php echo BASE_URL; ?>financial/add_payment_methods">Novo</a>
			</div>
		</div>
	</div>


	<!-- Cabeçalho Tabela -->
	<div class="table_header">
		<div class="table-60">Método</div>
		<div class="table-35">Tipo</div>
		<div class="table-5"></div>
	</div>

	<?php foreach ($payment_method_list as $pm) : ?>
		<div class="table_data">
			<div class="table-60"><span class="table-title-mobile">Método:</span><?php echo $pm['method']; ?></div>
			<div class="table-35"><span class="table-title-mobile">Tipo:</span>
				<?php
				if ($pm['type_method'] == 1) {
					echo "<p class=blue>À Vista</p>";
				} else {
					echo "<p class=gray>A prazo</p>";
				}
				?></div>
			<div class="table-5 table-options">
				<div class="dropdown">
					<i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
					<div id="myDropdown1" class="dropdown-content">
							<ul>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/edit_payment_methods/<?php echo $pm['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
								<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/delete_payment_methods/<?php echo $pm['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
							</ul>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>