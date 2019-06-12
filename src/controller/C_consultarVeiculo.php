<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
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
				?>
					 <head>
					 <style>
					 th, td, tr {border: 1px solid black;}
					 th {background-color: rgba(0,0,0,0.3)}
					 </style>
					 </head>
					 <table class="table table-bordered table-striped text-center">
					 <tr>
					 <th>Placa	</th>
					 <th>Modelo</th>
					 <th>Chassi</th>
					 <th>Cor</th>
					 <th>Ano</th>
					 </tr>
					 <tr>
					 <td><?=$linha[0]?></td>
					 <td><?=$linha[1]?></td>
					 <td><?=$linha[2]?></td>
					 <td><?=$linha[3]?></td>
					 <td><?=$linha[4]?></td>
					 </tr>
					 </table>
					 <?php echo "<br /><a class=\"btn btn-primary\" href=\"../view/consultarVeiculo.php\">VOLTAR</a>";
						
					$conexao->fechar();
				?>
			</div>
		</div>
	</body>
</html>
