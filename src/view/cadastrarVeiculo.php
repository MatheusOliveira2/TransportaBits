<!-- Interface com os campos necessários para cadastras veículos -->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Cadastrar</title>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand h1 mb-0" href="#"> <h3>Cadastrar Veículos</h3></a>
			</nav>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<form action="../controller/C_cadastroVeiculo.php" method="POST">
					<h2>Cadastro De Veiculo</h2>
					<div class="row d-flex justify-content-center mt-2">
						Modelo: <input type="text" name="modelo" /><br />
					</div>
					<div class="row d-flex justify-content-center mt-2">
						Placa: <input type="text" name="placa" /><br />
					</div>
					<div class="row d-flex justify-content-center mt-2">
					    	Chassi: <input type="text" name="chassi" /><br />
					</div>
					<div class="row d-flex justify-content-center mt-2">
					    	Cor: <input type="text" name="cor" /><br />
					</div>
					<div class="row d-flex justify-content-center mt-2">
					    	Ano: <input type="text" name="ano" /><br />
					</div>
					<br />
					<button class="btn btn-dark" type = "submit"> Cadastrar </button>
				</form>
				
				<br />

				<a class="btn btn-primary" href="../index.php" >VOLTAR</a>
			</div>
		</div>
	</body>
</html>
