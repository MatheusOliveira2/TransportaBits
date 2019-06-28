<!-- Interface com os campos necessários para cadastras veículos -->

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../node_modules/js/sweetalert.js"></script>
	<title>Cadastrar</title>
	<style>
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
</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<ul class="navbar-nav mr-auto">
					<a class="navbar-brand h1 mb-0" href="#">
						<h3>Cadastrar Cliente</h3>
					</a>
				</ul>
				<ul class="navbar-nav ml-auto">
					<a class="btn btn-primary minhaNavbar" href="../index.php">VOLTAR</a>
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
					Cadastrar Cliente
					</p>
				</div>
			</div>
			<form action="../controller/C_cadastroCliente.php" method="POST">
			<div class="row d-flex justify-content-center mt-4">
				<div class="col-12" style="text-align: center;margin-right:160px ">CNPJ</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
							<input type="text" name="cnpj" />
						</div>
					</div>
					
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-12" style="text-align: center;margin-right:160px ">E-mail</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
							<input type="text" name="email" />
						</div>
					</div>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-12" style="text-align: center;margin-right:135px ">Endereço</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
							<input type="text" name="endereco" />
						</div>
					</div>

					<div class="row d-flex justify-content-center mt-2">
						<div class="col-12" style="text-align: center;margin-right:160px ">Senha</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
							<input type="password" name="senha" /><br />
						</div>
					</div>

					<br />
                    <button class="myBtn mr-2" type = "submit"> Cadastrar </button>
			</form>
		</div>
		
		<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "false") { ?>
			<script>
				Swal.fire({
					type: 'error',
					title: 'Cliente não Cadastrado'
				})
			</script>
		<?php } ?>

		<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "true") { ?>
			<script>
				Swal.fire({
					type: 'success',
					title: 'Cliente Cadastrado'
				})
			</script>
		<?php } ?>
	</div>
	<footer class="fixed-bottom bg-primary">
		<div class="footer-copyright text-center py-3 text-white">
			© 2019 Copyright: Luis Felype Fioravanti & Matheus Oliveira
		</div>
	</footer>
</body>

</html>