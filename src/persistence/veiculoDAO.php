<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
		<link href="../node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="../node_modules/bootstrap/compiler/styles.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../node_modules/popper.js/dist/popper.js"></script>
		<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<title>Veículos</title>
	</head>

	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand h1 mb-0" href="#"> <h3>Veículo</h3></a>
			</nav>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<?php
					#Classe responsável por comunicar com o banco de dados, com a tabela veículos.
					include_once("../model/veiculo.php");
					
					class VeiculoDAO {
						function cadastrar($veiculo, $link) { #método responsável por cadastrar veículos no banco de dados.
							$query = "INSERT INTO Veiculo VALUES ('".($veiculo->getPlaca())."','".($veiculo->getModelo())."','".($veiculo->getChassi())."','".($veiculo->getCor())."',".($veiculo->getAno()).")";
							if(!mysqli_query($link, $query)) die("<h2>Erro ao cadastrar!</h2> <br /><br /><a  class=\"btn btn-primary\"  href=\"../view/cadastrarVeiculo.php\">VOLTAR</a>") ;
							echo "<h2>Veículo Cadastrado com Sucesso.</h2><br /><br /><a  class=\"btn btn-primary\"  href=\"../view/cadastrarVeiculo.php\">VOLTAR</a>";
						}
						
						function excluir($codigo, $link) { #método responsável por excluir veículos no banco de dados.
							$query = "DELETE FROM Veiculo WHERE Placa="."'$codigo'";
							if(!mysqli_query($link, $query)) {
								die("<h2>ERRO! Veículo Não Excluido.</h2> <br /><br /><a class=\"btn btn-primary\"  href=\"../view/excluirCliente.html\">VOLTAR</a>");
							}
							echo "<h2>Veículo Excluído com Sucesso.</h2><br /><br /><a class=\"btn btn-primary\"  href=\"../view/excluirVeiculo.php\">VOLTAR</a>";
						}
						
						function consultar($codigo, $link) { #método responsável por consultar veículos no banco de dados.
							$query = "SELECT * FROM Veiculo WHERE Placa="."'$codigo'";
							$result = mysqli_query($link, $query);
							if(!$result){
								die("<h2>ERRO! Veículo Não Encontrado.</h2> <br /><br /><a class=\"btn btn-primary\"  href=\"../view/consultarVeiculo.php\">VOLTAR</a>");
							}
							return $result;
						}
						
						function alterar($placa, $cor,$link) { #método responsável por alterar informações de veículos no banco de dados.
							$query = "UPDATE Veiculo set Cor = '$cor' WHERE Placa="."'$placa'";
							if(!mysqli_query($link, $query)) {
								die("<h2>ERRO! Veículo Não Atualizado.</h2><br /><br /><a class=\"btn btn-primary\"  href=\"../view/atualizarVeiculo.php\">VOLTAR</a>");
							}
							echo "<h2>Veículo Atualizado com Sucesso.</h2><br /><	br /><a class=\"btn btn-primary\" href=\"../view/atualizarVeiculo.php\">VOLTAR</a>";
					}
					
					}
				?>
