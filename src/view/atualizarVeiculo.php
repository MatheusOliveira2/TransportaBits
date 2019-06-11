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
		<title>Atualizar</title>
	</head>

	<body>
		<form action="../controller/C_atualizarVeiculo.php" method="POST">
			<h2>Atualizar Veiculo</h2>
				Placa:<select  name="codigo">
					<?php while($row = $results->fetch_assoc()):?>
						<option value="<?= $row['Placa'] ?>"><?= $row['Placa'] ?></option>
					<?php endwhile ?>
				</select>
				Cor: <input type="text" name="cor" value="<?= $row['Placa']?>"><br />	
			<button type = "submit"> Atualizar </button>
		</form>
		
		<br /><a href="../index.php">VOLTAR</a>
	</body>
</html>