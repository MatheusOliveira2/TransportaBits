<!-- Interface com os campos necessários atualizar e/ou excluir os dados do cliente -->

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../node_modules/js/sweetalert.js"></script>
	<title>Gerenciar</title>
</head>

<body>
	<style>
		.myBtnRed {
			font-size: 18px;
			width: 80px;
			border-radius: 4px;
			padding: 3px;
			color: white;
			background-color: red;
			border-color: red;
		}
		.myBtn {
			font-size: 18px;
			width: 120px;
			border-radius: 4px;
			padding: 3px;
			color: #007bff;
			background-color: white;
			border-color: #007bff;
		}
	</style>
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
					<a class="btn btn-primary minhaNavbar" href="gerenciarFrota.php">VOLTAR</a>
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
						Atualizar Cliente
					</p>
				</div>
			</div>
			<form action="../controller/C_atualizarCliente.php" method="POST">
				<div class="container">
					
				<div class="row d-flex justify-content-center mt-2">
								<div class="col-12 " style="text-align: center;margin-right:160px">E-mail</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-12" style="text-align: center;">
								<input type="text" name="email" /><br />
								</div>
							</div>

							<div class="row d-flex justify-content-center mt-2">
								<div class="col-12 " style="text-align: center;margin-right:140px">Endereço</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-12" style="text-align: center;">
									<input type="text" name="endereco" /><br />
								</div>
							</div>

							<div class="row d-flex justify-content-center mt-2">
								<div class="col-12 " style="text-align: center;margin-right:160px">Senha</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-12" style="text-align: center;">
								<input type="password" name="senha" /><br />
								</div>
							</div>

							<br />
							<button class="myBtn" type = "submit"> Atualizar </button>
							<button onclick="location.href='../controller/C_excluirCliente.php';" type="button" class="myBtnRed">Excluir</button>
				</div>
			</form>
			<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "false") { ?>
				<script>
					Swal.fire({
						type: 'error',
						title: 'Conta não alterada!',
					})
				</script>
			<?php } ?>

			<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "true") { ?>
				<script>
					Swal.fire({
						type: 'success',
						title: 'Conta alterada!'
					})
				</script>
			<?php } ?>
			<?php if (isset($_GET['excluiu']) and $_GET['excluiu'] == "false") { ?>
				<script>
					Swal.fire({
						type: 'error',
						title: 'Conta não excluida',
						text: 'Existem veiculos vinculados ao cliente!'

					})
				</script>
			<?php } ?>
		</div>

	</div>
	<footer class="fixed-bottom bg-primary">
		<div class="footer-copyright text-center py-3 text-white">
			© 2019 Copyright: Luis Felype Fioravanti & Matheus Oliveira
		</div>
	</footer>
</body>

</html>