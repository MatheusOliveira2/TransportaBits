<!-- Interface com os campos necessários para cadastras veículos -->
<?php
include_once("../persistence/conexao.php");
$conexao = new Connection();
$conexao->conectar();
$query = "SELECT Placa FROM Veiculo LEFT JOIN Rastreador ON Veiculo.Placa = Rastreador.Veiculo_Placa WHERE Rastreador.Veiculo_Placa IS NULL";
$results = mysqli_query($conexao->getLink(), $query);
	

$count = mysqli_num_rows($results);
?>
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
					<a class="btn btn-primary minhaNavbar" href="gerenciarRastreadores.php">VOLTAR</a>
					<a class="btn btn-primary minhaNavbar" href="../index.php">LOGOUT</a>
				</ul>
			</div>
		</nav>
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>TransportaBits</h1>
			<h2>Cadastrar Rastreador</h2>
			<form action="../controller/C_cadastroRastreador.php" method="POST">
				<div class="container">
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-3 " style="text-align: left;">
							Modelo: <input type="text" name="modelo" /><br />
						</div>
					</div>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-3 " style="text-align: left;">
							N° Série: <input type="text" name="nSerie" /><br />
						</div>
					</div>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-3 " style="text-align: left;">
							Veículo: <select name="veiculo">
								<?php while ($row = $results->fetch_assoc()) : ?>
									<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
								<?php endwhile ?>
							</select><br />
						</div>
					</div>
					<br />
					<button class="btn btn-dark" type="submit"> Cadastrar </button>
				</div>
			</form>
		</div>
		<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "false") { ?>
			<script>
				Swal.fire({
					type: 'error',
					title: 'Rastreador não Cadastrado'
				})
			</script>
		<?php } ?>

		<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "true") { ?>
			<script>
				Swal.fire({
					type: 'success',
					title: 'Rastreador Cadastrado'
				})
			</script>
		<?php } ?>
	</div>
</body>

</html>