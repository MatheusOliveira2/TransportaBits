<!-- Interface com os campos necessários para cadastras veículos -->

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<title>Login</title>
</head>

<body>
	<style>
	.myBtn{
		font-size: 12px;
		width: 80px;
		border-radius:4px;
		padding: 3px;
		color: #007bff;
		background-color: white;
		border-color: #007bff;
	}
	</style>

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
			<form action="controller/C_cadastroVeiculo.php" method="POST">
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
				<button type="button" onclick="location.href='view/gerenciarFrota.php';"class="myBtn mr-2" href="view/gerenciarFrota.php"> Login </button>
				<button type="button" onclick="location.href='view/cadastrarCliente.php';"  class="myBtn">Cadastrar</button>

			</form>
		</div>
	</div>
</body>

</html>

