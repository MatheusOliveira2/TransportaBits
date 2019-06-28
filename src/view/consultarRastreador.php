<!-- Interface com os campos necessários para consultar os dados de veículos -->

<?php
include_once("../persistence/conexao.php");
$conexao = new Connection();
$conexao->conectar();
$query = "SELECT * FROM `Rastreador` ";
$results = mysqli_query($conexao->getLink(), $query);
?>

<html>

<head>
	<style>
		.myBtnRed {
			font-size: 12px;
			width: 80px;
			border-radius: 4px;
			padding: 3px;
			color: white;
			background-color: red;
			border-color: red;
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
		.myBtn {
			font-size: 18px;
			width: 210px;
			border-radius: 4px;
			padding: 3px;
			color: #007bff;
			background-color: white;
			border-color: #007bff;
		}
	</style>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../node_modules/js/sweetalert.js"></script>
	<title>Consultar</title>
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
						Consultar Rastreador
					</p>
				</div>
			</div>
			<form action="../controller/C_consultarRastreador.php" method="POST">
				<div class="row d-flex justify-content-center mt-2">
					<div class="col-12" style="text-align: center;margin-right:10	0px ">N° Série</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-12 " style="text-align: center;">
					<select  class="myCombo mr-2" name="codigo" style="text-align: center;margin-right:10px">
							<?php while ($row = $results->fetch_assoc()) : ?>
								<option value="<?= $row['NSerie'] ?>"><?= $row['NSerie'] ?></option>
							<?php endwhile ?>
						</select>
					</div>
				</div>
				<br />
				<br />
				<button class="myBtn" type="submit"> Consultar </button>
			</form>
			<?php if (isset($_GET['funcionou']) and $_GET['funcionou'] == "true") { ?>
				<?php
				session_start();
				$objeto = $_SESSION["result"];
				?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col" class="text-center">N°Série</th>
							<th scope="col" class="text-center">Modelo</th>
							<th scope="col" class="text-center">Veiculo_Placa</th>
							<th scope="col" class="text-center">Excluir</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><?= $objeto['NSerie'] ?></td>
							<td class="text-center"><?= $objeto['Modelo'] ?></td>
							<td class="text-center"><?= $objeto['Veiculo_Placa'] ?></td>
							<td class="text-center"><button onclick="location.href='../controller/C_excluirRastreador.php?codigo=<?= $objeto['NSerie'] ?>';" type="button" class="myBtnRed">Excluir</button></td>
						</tr>
					</tbody>
				</table>
			<?php } ?>
			<?php if (isset($_GET['excluiu']) and $_GET['excluiu'] == "false") { ?>
				<script>
					Swal.fire({
						type: 'error',
						title: 'Rastreador não excluido'
					})
				</script>
			<?php } ?>

			<?php if (isset($_GET['excluiu']) and $_GET['excluiu'] == "true") { ?>
				<script>
					Swal.fire({
						type: 'success',
						title: 'Rastreador excluido'
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