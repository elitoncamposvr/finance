<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Finance - Painel de Controle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/fonts/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main.css" />
</head>

<body>
	<aside>
		<h1 class="logo">7Finance</h1>

		<nav>
			<a href="<?php echo BASE_URL; ?>">
				<div class="link-menu  hover:bg-secondary">
					<i class="fa-solid fa-house fa-lg icon-menu"></i>
					Visão Geral
				</div>
			</a>
			<a href="<?php echo BASE_URL; ?>customers">
				<div class="link-menu hover:bg-secondary">
					<i class="fa-solid fa-user-group fa-lg icon-menu"></i>
					Clientes
				</div>
			</a>
			<a href="<?php echo BASE_URL; ?>suppliers">
				<div class="link-menu hover:bg-secondary">
					<i class="fa-solid fa-box fa-lg icon-menu"></i>
					Fornecedores
				</div>
			</a>
			<a href="<?php echo BASE_URL; ?>inventory">
				<div class="link-menu hover:bg-secondary">
					<i class="fa-solid fa-boxes-stacked fa-lg icon-menu"></i>
					Estoque
				</div>
			</a>
			<a href="<?php echo BASE_URL; ?>orderservice">
				<div class="link-menu hover:bg-secondary">
					<i class="fa-solid fa-clipboard-list fa-lg icon-menu"></i>
					Ordem de Serviço
				</div>
			</a>
			<a href="<?php echo BASE_URL; ?>financial">
				<div class="link-menu hover:bg-secondary">
					<i class="fa-solid fa-brazilian-real-sign fa-lg icon-menu"></i>
					Financeiro
				</div>
			</a>
			<a href="<?php echo BASE_URL; ?>reports">
				<div class="link-menu hover:bg-secondary">
					<i class="fa-solid fa-receipt fa-lg icon-menu"></i>
					Relatórios
				</div>
			</a>

		</nav>

		<div class="aside-footer">
			<a class="px-2" href="<?php echo BASE_URL; ?>settings">
				<i class="fa-solid fa-gear fa-lg"></i>
				Configurações
			</a>
			<a class="px-2" href="<?php echo BASE_URL; ?>login/logout">
				Sair
				<i class="fa-solid fa-right-from-bracket fa-lg px-2"></i>
			</a>
		</div>
	</aside>
	<main>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</main>

</body>

</html>