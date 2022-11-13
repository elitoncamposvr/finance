	<!-- Breadcrumbs -->
	<div class="breadcrumb">
		<h2>Reservas<i class="fas fa-angle-right fa-xs"></i>Listar Abertas</h2>
	</div>
	<div class="content">

		<!-- Botões -->
		<div class="menu_data">
			<p>
				<a class="btn" href="<?php echo BASE_URL; ?>schedule/select_client">Novo</a>
			</p>
			<span>
				<a class="btn" href="<?php echo BASE_URL; ?>schedule/listall">Listar Todos</a>
			</span>

		</div>

		<!-- Cabeçalho Tabela (Table Header) -->
		<?php if ($schedule_list) : ?>
			<div class="table_header">
				<div class="table-75">Nome</div>
				<div class="table-15">Situação</div>
				<div class="table-10"></div>
			</div>

			<!-- Dados da Tabela (Data Table)-->
			<?php foreach ($schedule_list as $s) : ?>
				<div class="table_data">
					<div class="table-75"><?php echo $s['client_name']; ?></div>
					<div class="table-15">
						<?php if ($s['situation'] == 4) {
							echo '<span class="schedule_status schedule_status--aproved">Aprovada</span>';
						} else {
							echo '<span class="schedule_status schedule_status--pending">Pendente</span>';
						} ?>
					</div>
					<div class="table-10 table-options txt-right">
						<div class="dropdown">
							<i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
							<div id="myDropdown1" class="dropdown-content">
								<ul>
									<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/view/<?php echo $s['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
									<?php if ($s['situation'] == 1 || $s['situation'] == 3) : ?>
										<li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/delete/<?php echo $s['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="flash_info my-x">
				<p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum agendamento em aberto!</span>
			</div>
		<?php endif; ?>
	</div>

	<!-- Script Dropdown Itens -->
	<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>