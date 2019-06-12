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
		<script type="text/javascript" src="../node_modules/popper.js/dist/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Atualizar</title>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand h1 mb-0" href="#"> Atualizar Veículos</a>
			</nav>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<form action="../controller/C_atualizarVeiculo.php" method="POST">
					<h2>Selecione a Placa</h2>
						Placa:<select  name="codigo">
							<?php while($row = $results->fetch_assoc()):?>
								<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
							<?php endwhile ?>
						</select>
						Cor: <input type="text" name="cor" value="<?= $row['Placa']?>"><br />	
					<br />
					<button class="btn btn-dark" type = "submit"> Atualizar </button>
				</form>
				<br />
				<a class="btn btn-primary" href="../index.php">VOLTAR</a>
			</div>
		</div>
	</body>
</html>
