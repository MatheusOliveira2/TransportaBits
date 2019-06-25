<!-- Interface com os campos necessários para cadastras veículos -->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Login</title>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand h1 mb-0" href="#"> <h3>Transporta Bits</h3></a>
			</nav>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<form action="controller/C_cadastroVeiculo.php" method="POST">
					<h2>Login</h2>
					<div class="row d-flex justify-content-center mt-2">
							<div class="col-3 " style="text-align: left;">
								CNPJ:<br /> <input type="text" name="cnpj" /><br />
							</div>
					</div>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-3 " style="text-align: left;">
							Senha:<br /> <input type="password" name="senha" /><br />
						</div>
					</div> 
					<br />
					<a class="btn btn-dark" href="view/gerenciarFrota.php"> Login </a>
                    <a class="btn btn-primary" href="view/cadastrarCliente.php" >Cadastrar</a>
				</form>
			</div>
		</div>
	</body>
</html>