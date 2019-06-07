<?php 
	include_once("../persistence/conexao.php");
	$conexao = new Connection();
	$conexao->conectar();
	$query = "SELECT Placa FROM `Veiculo` ";
	$results = mysqli_query($conexao->getLink(), $query);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<title>Consultar</title>
	</head>

	<body>
		<form action="../controller/C_consultarVeiculo.php" method="POST">
			<h2>Consultar Veiculo</h2>
				Placa:<select name="codigo">
					<?php while($row = $results->fetch_assoc()):?>
						<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
					<?php endwhile ?>
				</select>
			<input type="submit" name="salvar" />
			<input type="reset" name="limpar" /><br />
		</form>
		
		<br /><a href="sistema.html">VOLTAR</a>
	</body>
</html>