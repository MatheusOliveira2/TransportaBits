<!-- Interface com os campos necessários para excluir veiculos-->
<?php
include_once("../persistence/conexao.php");
$conexao = new Connection();
$conexao->conectar();
$query = "SELECT Placa FROM `Veiculo` ";
$results = mysqli_query($conexao->getLink(), $query);
?>


<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
	<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="../node_modules/popper.js/dist/popper.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</head>
	<title>Excluir</title>
</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand h1 mb-0" href="#"> <h3>Excluir Veículos</h3></a>
		</nav>
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<form  action="../controller/C_excluirVeiculo.php" method="POST">
				<h2>Selecione a Placa</h2>
				Placas Disponíveis:<select name="codigo">
							<?php while ($row = $results->fetch_assoc()) : ?>
								<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
							<?php endwhile ?>
						</select>
						<button class="btn btn-danger" type = "submit"> Excluir </button>
			</form>

			<br />
			<br />		
			<a  class="btn btn-primary" href="../index.php">VOLTAR</a>
		</div>
	</div>
</body>

</html>
