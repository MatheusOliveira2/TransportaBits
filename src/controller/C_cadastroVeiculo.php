<?php
	#Controlador responsável por cadastrar os veículos
	include_once("../model/veiculo.php");
	include_once("../persistence/conexao.php");
	include_once("../persistence/veiculoDAO.php");
	
	$veiculo = new Veiculo($_POST["modelo"], $_POST["placa"],$_POST["chassi"], $_POST["cor"], $_POST["ano"]);
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$veiculodao = new veiculoDao();
	$veiculodao->cadastrar($veiculo, $conexao->getLink());
	$conexao->fechar();
?>	