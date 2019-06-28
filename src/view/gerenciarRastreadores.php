<!-- Interface com os campos necessários para navegar entre as opções de cadastrar, buscar, atualizar e excluir rastreadores -->

<html lang="pt-br">
<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Gerenciar Rastreadores</title>
		<style>
		.myBtn {
			font-size: 18px;
			width: 210px;
			border-radius: 4px;
			padding: 3px;
			color: #007bff;
			background-color: white;
			border-color: #007bff;
		}
		</style>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
								<span class="navbar-toggler-icon"></span>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="gerenciarFrota.php"> Frota</a>
								<a class="dropdown-item" href="gerenciarMotoristas.php"> Motoristas</a>
								<a class="dropdown-item" href="gerenciarRastreadores.php"> Rastreadores</a>
								<a class="dropdown-item" href="gerenciarVeiculos.php"> Veículos</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<a class="btn btn-primary minhaNavbar" href="gerenciarFrota.php" >VOLTAR</a>
						<a class="btn btn-primary minhaNavbar" href="../controller/C_logout.php">LOGOUT</a>
					</ul>
				</div>
			</nav>

			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="text-primary h1 mt-2">
							Transporta Bits
						</p>
					</div>
					<div class="col-sm-12 text-center">
						<p class="text-primary h2 mt-2">
							Gerenciar Rastreadores
						</p>
					</div>
				</div>
				<br />

				<div class="row d-flex justify-content-center mt-4">
					<button onclick="location.href='atualizarRastreador.php';" class="myBtn ">Atualizar Rastreadores</button><br />
				</div>
				<div class="row d-flex justify-content-center mt-4" >
					<button onclick="location.href='cadastrarRastreador.php';" class="myBtn"> Cadastrar Rastreadores</button><br />
				</div>
				<div class="row d-flex justify-content-center mt-4">
					<button onclick="location.href='consultarRastreador.php';" class="myBtn"> Consultar Rastreadores</button><br />
				</div>
			</div>
		</div>
		<footer class="fixed-bottom bg-primary">
			<div class="footer-copyright text-center py-3 text-white">
				© 2019 Copyright: Luis Felype Fioravanti & Matheus Oliveira
			</div>
		</footer>
	</body>
</html>
