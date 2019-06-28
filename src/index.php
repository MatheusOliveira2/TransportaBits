<!-- Interface com os campos necessários para cadastras veículos -->

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/js/sweetalert.js"></script>
	<title>Login</title>
	<style>
		.myBtn {
			font-size: 12px;
			width: 80px;
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
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
			<a class="navbar-brand h3 mb-0" href="#"> Transporta Bits</a>
		</nav>

		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="text-primary h1 mt-2">
					Transporta Bits
				</p>
			</div>
			<div class="col-sm-12 text-center">
				<p class="text-primary h2 mt-2">
					Login
				</p>
			</div>
		</div>
		<div class="form-group col-sm-12 col-md-12 col-lg-12 text-center">
			<form action="controller/C_login.php" method="POST">
				<div class="row d-flex justify-content-center mt-4">
					<div class="col-12" style="text-align: center;margin-right:160px ">CNPJ</div>
				</div>

				<div class="row d-flex justify-content-center">
					<div class="col-12 " style="text-align: center;">
						<input type="text" name="cnpj" /><br />
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
				<button type="submit" class="myBtn mr-2"> Login </button>
				<button type="button" onclick="location.href='view/cadastrarCliente.php';" class="myBtn">Cadastrar</button>

			</form>
		</div>

		<?php if (isset($_GET['autenticado']) and $_GET['autenticado'] == "false") { ?>
			<script>
				Swal.fire({
					type: 'error',
					title: 'Senha Incorreta',
				})
			</script>
		<?php } ?>

		<?php if (isset($_GET['logout']) and $_GET['logout'] == "true") { ?>
			<script>
				Swal.fire({
					type: 'success',
					title: 'Logout'
				})
				
			</script>
		<?php } ?>

		<?php if (isset($_GET['excluiu']) and $_GET['excluiu'] == "true") { ?>
			<script>
				Swal.fire({
					type: 'success',
					title: 'Conta Excluida'
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