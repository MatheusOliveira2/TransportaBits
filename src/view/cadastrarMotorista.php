<!-- Interface com os campos necessários para cadastras veículos -->

<?php
include_once("../persistence/conexao.php");
$conexao = new Connection();
$conexao->conectar();
$query = "SELECT Placa FROM Veiculo LEFT JOIN Motorista ON Veiculo.Placa = Motorista.Veiculo_Placa WHERE Motorista.Veiculo_Placa IS NULL";
$results = mysqli_query($conexao->getLink(), $query);
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
					<a class="btn btn-primary minhaNavbar" href="gerenciarMotoristas.php">VOLTAR</a>
					<a class="btn btn-primary minhaNavbar" href="../index.php">LOGOUT</a>
				</ul>
			</div>
		</nav>
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>TransportaBits</h1>
			<form action="../controller/C_cadastroMotorista.php" method="POST">
				<div class="container">
					<h2>Cadastro De Motorista</h2>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-3 " style="text-align: left;">
							Nome: <input type="text" name="nome" /><br />
						</div>
					</div>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-3 " style="text-align: left;">
							CNH:<br /> <input type="text" name="cnh" /><br />
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
				<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "false") { ?>
					<script>
						Swal.fire({
							type: 'error',
							title: 'Motorista não Cadastrado'
						})
					</script>
				<?php } ?>

				<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "true") { ?>
					<script>
						Swal.fire({
							type: 'success',
							title: 'Motorista Cadastrado'
						})
					</script>
				<?php } ?>
			</form>
		</div>



	</div>

</body>

</html>