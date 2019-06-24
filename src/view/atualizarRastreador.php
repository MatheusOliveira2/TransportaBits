<!-- Interface com os campos necessários para atualizar os dados de veículos -->

<?php 
	include_once("../persistence/conexao.php");
	$conexao = new Connection();
	$conexao->conectar();
	$query = "SELECT * FROM `Veiculo` ";
	$results = mysqli_query($conexao->getLink(), $query);
	$cor = "";
?>



<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Atualizar</title>
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
						<a class="btn btn-primary minhaNavbar" href="gerenciarRastreadores.php" >VOLTAR</a>
						<a class="btn btn-primary minhaNavbar" href="../index.php" >LOGOUT</a>
					</ul>
				</div>
			</nav>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>TransportaBits</h1>
				<form action="../controller/C_atualizarVeiculo.php" method="POST">
					<div class="container">
						<h2>Atualizar Rastreador</h2>	
						<div class="row d-flex justify-content-center mt-2">
							<div class="col-3 " style="text-align: left;">
								Rastreador:<br/><select  name="codigo">
												<?php while($row = $results->fetch_assoc()):?>
													<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
												<?php endwhile ?>
											</select>
							</div>
						</div>
						<div class="row d-flex justify-content-center mt-2">
							<div class="col-3 " style="text-align: left;">
								Veículo: <input type="text" name="veiculo" value="<?= $row['Placa']?>"><br />	
							</div>
						</div>
						<br/>
						<button class="btn btn-dark" type = "submit"> Atualizar </button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
