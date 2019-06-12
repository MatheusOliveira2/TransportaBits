<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<style type="text/css">	
			#centralizado{
				width:480px;
				height: 55px;
				margin: 0 0 0 400;
			}
			#botao{
				width:131px;
				height: 40px;
				margin: 0 auto 0 80;
			}
		</style>
		<title>Veiculo Consultado</title>
	</head>

	<body>
		<div class="container-fluid">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<?php
					#Controlador responsável por buscar as informações de veículos
					include_once("../persistence/conexao.php");
					include_once("../persistence/veiculoDAO.php");
					
					$codigo = $_POST['codigo'];
					
					$conexao = new Connection();
					$conexao->conectar();
					
					$veiculodao = new veiculoDao();
					$resultado = $veiculodao->consultar($codigo, $conexao->getLink());

					$linha = mysqli_fetch_row($resultado);
					
					echo "<head>";
					echo "<style>";
					echo "th, td, tr {border: 1px solid black;}";
					echo "th {background-color: rgba(0,0,0,0.3);}";
					echo "</style>";
					echo "</head>";
					echo "<table>";
					echo "<tr>";
					echo "<th>Placa	</th>";
					echo "<th>Modelo</th>";
					echo "<th>Chassi</th>";
					echo "<th>Cor</th>";
					echo "<th>Ano</th>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>".($linha[0])."</td>";
					echo "<td>".($linha[1])."</td>";
					echo "<td>".($linha[2])."</td>";
					echo "<td>".($linha[3])."</td>";
					echo "<td>".($linha[4])."</td>";
					echo "</tr>";
					echo "</table>";
					echo "<br /><a class=\"btn btn-primary\" href=\"../view/consultarVeiculo.php\">VOLTAR</a>";
					$conexao->fechar();
				?>
			</div>
		</div>
	</body>
</html>
