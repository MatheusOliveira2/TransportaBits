<?php
	#Controlador responsável por excluir os veiculos do banco de dados.
	include_once("../persistence/conexao.php");
	include_once("../persistence/rastreadorDAO.php");
	
	$codigo = $_GET['codigo'];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$rastreadordao = new rastreadorDao();
	$rastreadordao->excluir($codigo, $conexao->getLink());
	$conexao->fechar();
?>