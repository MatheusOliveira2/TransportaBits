<!-- Interface com os campos necessários para cadastrar motoristas -->

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
		.myCombo{
			font-size: 18px;
			width: 150px;
			border-radius:4px;
			padding: 3px;
			color: #000000;
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
					<a class="btn btn-primary minhaNavbar" href="gerenciarMotoristas.php">VOLTAR</a>
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
						Cadastrar Motorista
					</p>
				</div>
			</div>
			<form action="../controller/C_cadastroMotorista.php" method="POST">
				<div class="container">
				<div class="container">
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-12" style="text-align: center;margin-right:160px ">Nome</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
							<input type="text" name="nome" /><br />
						</div>
					</div>
					
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-12" style="text-align: center;margin-right:170px ">CNH</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
							<input type="text" name="cnh" /><br />
						</div>
					</div>
					<div class="row d-flex justify-content-center mt-2">
						<div class="col-12" style="text-align: center;margin-right:110px ">Veículo</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-12 " style="text-align: center;">
						<select  class="myCombo mr-2" name="veiculo" style="text-align: center;margin-right:10px">
								<?php while ($row = $results->fetch_assoc()) : ?>
									<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
								<?php endwhile ?>
							</select><br />
						</div>
					</div>
					<br />
					<button class="myBtn" type="submit"> Cadastrar </button>
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
	<footer class="fixed-bottom bg-primary">
		<div class="footer-copyright text-center py-3 text-white">
			© 2019 Copyright: Luis Felype Fioravanti & Matheus Oliveira
		</div>
	</footer>
</body>

</html>