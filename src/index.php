<!-- Interface com os campos necessários para navegar entre as opções de cadastrar, buscar, atualizar e excluir veículos -->

<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<title>TransportaBits</title>
		<link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
		<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<style type="text/css">	
			
		</style>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand h1 mb-0" href="#"> <h3>TransportaBits - Veículos</h3></a>
			</nav>

			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				
				<br />

				<div class="row d-flex justify-content-center mt-2" >
					<a href="view/cadastrarVeiculo.php" class="btn btn-dark"> Cadastrar Veiculo</a><br />
				</div>
				<div class="row d-flex justify-content-center mt-2">
					<a href="view/consultarVeiculo.php" class="btn btn-dark btn-default"> Consultar Veiculo</a><br />
				</div>
				<div class="row d-flex justify-content-center mt-2">
					<a href="view/atualizarVeiculo.php" class="btn btn-dark btn-default "> Atualizar Veiculo</a><br />
				</div>
				<div class="row d-flex justify-content-center mt-2">
					<a href="view/excluirVeiculo.php" class="btn btn-dark btn-default"> Excluir Veiculo</a><br />
				</div>
			</div>
		</div>
	</body>
</html>
