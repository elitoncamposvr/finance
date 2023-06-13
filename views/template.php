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
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.0.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
	<span class="absolute text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">
		<i class="fa-solid fa-bars"></i>
	</span>
	<div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-80 overflow-y-auto text-center bg-gray-900 transition-all delay-150 duration-700">
		<div class="text-gray-100 text-xl">
			<div class="p-2.5 mt-1 flex justify-between items-center">
				<h1 class="font-bold text-gray-200 text-[15px] ml-3">Finance</h1>
				<i class="fa-solid fa-angle-left fa-lg cursor-pointer " onclick="openSidebar()"></i>
			</div>
			<div class="my-2 bg-gray-600 h-[1px]"></div>
		</div>
		<div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
			<i class="bi bi-search text-sm"></i>
			<input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
		</div>
		<div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
			<i class="bi bi-house-door-fill"></i>
			<span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
		</div>
		<div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
			<i class="bi bi-bookmark-fill"></i>
			<span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
		</div>
		<div class="my-4 bg-gray-600 h-[1px]"></div>
		<div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown()">
			<i class="bi bi-chat-left-text-fill"></i>
			<div class="flex justify-between w-full items-center">
				<span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
				<span class="text-sm rotate-180" id="arrow">
					<i class="fa-solid fa-angle-down"></i>
				</span>
			</div>
		</div>
		<div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
			<h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
				Social
			</h1>
			<h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
				Personal
			</h1>
			<h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
				Friends
			</h1>
		</div>

		<div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
			<i class="bi bi-box-arrow-in-right"></i>
			<span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
		</div>
	</div>
	<main class="left-80 absolute">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</main>

	<script type="text/javascript">
		function dropdown() {
			document.querySelector("#submenu").classList.toggle("hidden");
			document.querySelector("#arrow").classList.toggle("rotate-0");
		}
		dropdown();

		function openSidebar() {
			document.querySelector(".sidebar").classList.toggle("hidden");
		}
	</script>


</body>

</html>