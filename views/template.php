<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta lang="pt-br">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Aventour Sistema de Reservas - Painel de <?php echo $viewData['company_name']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/fonts/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/mobile.css" />

	<!-- Jquery JS-->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript">
		var BASE_URL = '<?php echo BASE_URL; ?>';
	</script>
</head>

<body>
	<div class="container">
		<div class="menu-mobile">
			<div onclick="hideMenu()" class="hide-menu">
				<i class="fa-regular fa-circle-xmark fa-lg"></i>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>home">
					<div>
						<i class="fa-solid fa-house"></i>
					</div>
					<div>
						Visão Geral
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>schedule">
					<div>
						<i class="fa-solid fa-table-list"></i>
					</div>
					<div>
						Reservas
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>clients">
					<div>
						<i class="fa-solid fa-user-tie"></i>
					</div>
					<div>
						Clientes
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>services">
					<div>
						<i class="fa-solid fa-briefcase"></i>
					</div>
					<div>
						Serviços
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>provider">
					<div>
						<i class="fa-solid fa-industry"></i>
					</div>
					<div>
						Fornecedores
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>financial">
					<div>
						<i class="fa-solid fa-dollar-sign"></i>
					</div>
					<div>
						Fluxo de Caixa
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>financial/accountspayable">
					<div>
						<i class="fa-solid fa-circle-dollar-to-slot"></i>
					</div>
					<div>
						Contas a Pagar
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>financial/accountsreceivable">
					<div>
						<i class="fa-solid fa-hand-holding-dollar"></i>
					</div>
					<div>
						Contas a Receber
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>financial/comissions">
					<div>
						<i class="fa-solid fa-percent"></i>
					</div>
					<div>
						Comissões
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>report">
					<div>
						<i class="fa-solid fa-receipt"></i>
					</div>
					<div>
						Relatórios
					</div>
				</a>
			</div>
			<div class="menu-mobile--item">
				<a href="<?php echo BASE_URL; ?>login/logout">
					<div>
						<i class="fa-solid fa-right-from-bracket"></i>
					</div>
					<div>
						Sair
					</div>
				</a>
			</div>
		</div>
		<header>
			<nav>
				<div class="open-menu" onclick="openMenu()"><i class="fa-solid fa-bars fa-lg"></i></div>
				<div class="logo">Aventour</div>
				<ul class="menu">
					<li><a href="<?php echo BASE_URL; ?>">Visão Geral</a></li>
					<li><a href="#">Reservas</a>
						<ul>
							<li><a href="<?php echo BASE_URL; ?>schedule">Reservas Abertas</a></li>
							<li><a href="<?php echo BASE_URL; ?>schedule/pendingservicesall">Serviços Pendentes</a></li>
						</ul>
					</li>
					<li><a href="#">Cadastros</a>
						<ul>
							<li><a href="<?php echo BASE_URL; ?>clients">Clientes</a></li>
							<li><a href="<?php echo BASE_URL; ?>services">Serviços</a></li>
							<li><a href="<?php echo BASE_URL; ?>provider">Fornecedores</a></li>
						</ul>
					</li>
					<li><a href="#">Financeiro</a>
						<ul>
							<li><a href="<?php echo BASE_URL; ?>financial/accountsreceivable">Contas a Receber</a></li>
							<li><a href="<?php echo BASE_URL; ?>financial/accountspayable">Contas a Pagar</a></li>
							<li><a href="<?php echo BASE_URL; ?>financial">Fluxo de Caixa</a></li>
							<li><a href="<?php echo BASE_URL; ?>financial/comissions">Comissões</a></li>
						</ul>
					</li>
					<li><a href="<?php echo BASE_URL; ?>report">Relatórios</a></li>
				</ul>
				<span>
					<div class="dropdown">
						<i class="fas fa-cog fa-lg dropbtn" onclick="myFunction(this);"></i>
						<div id="myDropdown1" class="dropdown-content">
							<ul>
								<a href="<?php echo BASE_URL; ?>settings">Configurações</a>
								<a href="<?php echo BASE_URL; ?>login/logout">Sair</a>
							</ul>
						</div>
					</div>
				</span>
			</nav>
		</header>
		<div class="main-content">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		<footer>
			<span>
				Aventour Sistema de Reservas. © Todos os direitos reservados.
			</span>
		</footer>
	</div>

	<script src="<?php echo BASE_URL; ?>assets/js/main_script.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>
</body>

</html>