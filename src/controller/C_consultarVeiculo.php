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
	echo "<br /><a href=\"../view/consultarVeiculo.php\">VOLTAR</a>";
	$conexao->fechar();
?>