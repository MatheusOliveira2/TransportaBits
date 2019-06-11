<?php
	#Controlador responsável por excluir os veiculos do banco de dados.
	include_once("../model/veiculo.php");
	include_once("../persistence/conexao.php");
	include_once("../persistence/veiculoDAO.php");
	
	$codigo = $_POST['codigo'];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$veiculodao = new veiculoDao();
	$veiculodao->excluir($codigo, $conexao->getLink());
	$conexao->fechar();
?>