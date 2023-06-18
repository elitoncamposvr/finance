<!-- <div class="menu_data">
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
</div> -->

<?php if ($customers_list) : ?>
	<div class="table-header">
		<div class="w-3/4">Nome</div>
		<div class="w-1/4"></div>
	</div>

	<?php foreach ($customers_list as $customer) : ?>
		<div class="table-data hover:bg-white">
			<div class="w-3/4"><?php echo $customer['customer_name']; ?></div>
			<div class="w-1/4"></div>

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

	Total de Registros: <?php echo $customers_count; ?>

<?php else : ?>
	<div class="flash_info my-x">
		<p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
	</div>
<?php endif; ?>