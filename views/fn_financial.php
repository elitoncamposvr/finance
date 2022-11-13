<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Financeiro</h2>
</div>

<div class="content">

	<!-- Botões (Buttons) -->
	<div class="menu_data">
		<span>
			<a class="btn" href="<?php echo BASE_URL; ?>financial/bills_add">Novo</a>
		</span>
		<span>
			<a class="btn" href="#" onclick="itemShow()"><i class="fa-solid fa-filter"></i> Filtrar</a>
		</span>
	</div>

	<!-- Parâmetros do Filtro (Filter Params) -->
	<div class="menu_data-filter" id="item_toggle">
		<form action="<?php echo BASE_URL; ?>financial/financial_filter" method="get" class="form-filter">
			<div class="table-30 mr-el">
				<select name="account_type" id="account_type" class="table-100">
					<option value="3">Todas</option>
					<option value="1">Positivas</option>
					<option value="2">Negativas</option>
				</select>
			</div>
			<div class="table-50 txt-center">
				Período <input type="date" name="period1" id="period1" value="<?php echo date('Y-m-01'); ?>">
				até <input type="date" name="period2" id="period2" value="<?php echo date('Y-m-d'); ?>">
			</div>
			<div class="table-15 txt-center">
				<input type="submit" value="Filtrar">
			</div>
		</form>
	</div>

	<div class="title_list my-3">
		<p title_list>Últimos 20 Lançamentos</p>
	</div>

	<div class="table_header">
		<div class="table-5"></div>
		<div class="table-40">DESCRIÇÃO</div>
		<div class="table-15">Valor</div>
		<div class="table-15">Data</div>
		<div class="table-20">ID Transação</div>
		<div class="table-5"></div>
	</div>

	<?php if ($bills_list) : ?>
		<?php foreach ($bills_list as $bl) : ?>
			<div class="table_data <?php if ($bl['account_type'] == '1') {
										echo 'icon_positive';
									} else {
										echo 'icon_negative';
									} ?>">
				<div class="table-5 txt-center"><?php if ($bl['account_type'] == '1') {
													echo '<i class="fa-solid fa-arrow-up icon_positive mb-976-hide"></i>';
												} else {
													echo '<i class="fa-solid fa-arrow-down icon_negative mb-976-hide"></i>';
												} ?></div>
				<div class="table-40 txt-up"><span class="table-title-mobile">Descrição:</span><?php echo $bl['description']; ?></div>
				<div class="table-15 txt-up"><span class="table-title-mobile">Valor: </span>R$ <?php echo number_format($bl['bill_amount'], 2, ',', '.'); ?></div>
				<div class="table-15 txt-up"><span class="table-title-mobile">Data:</span><?php echo date('d/m/Y', strtotime($bl['payday'])); ?></div>
				<div class="table-20 txt-up"><span class="table-title-mobile">ID Transação:</span><?php echo $bl['id_transaction']; ?></div>
				<div class="w-5 table-options txt-right">
					<!-- <a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/bills_view/<?php echo $bl['id']; ?>"><i class="fas fa-eye"></i></a> -->
				</div>
			</div>
		<?php endforeach; ?>

	<?php else : ?>
		<div class="flash_info my-x">
			<p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
		</div>
	<?php endif; ?>
</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>