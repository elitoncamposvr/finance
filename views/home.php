<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Visão Geral</h2>
</div>

<div class="content">
	<div class="card-field">
		<div class="card">
			<div class="card--number">
				<?php echo $schedule_count_active; ?>
			</div>
			<div class="card--description">Reservas em Andamento</div>
		</div>
		<div class="card">
			<div class="card--number">
				<?php echo $schedule_count; ?>
			</div>
			<div class="card--description">Total de Reservas</div>
		</div>
		<div class="card">
			<div class="card--number">
				<?php echo $clients_count; ?>
			</div>
			<div class="card--description">Total de Clientes</div>
		</div>
		<div class="card">
			<div class="card--number">
				<?php echo $providers_count; ?>
			</div>
			<div class="card--description">Total de Fornecedores</div>
		</div>
	</div>
</div>