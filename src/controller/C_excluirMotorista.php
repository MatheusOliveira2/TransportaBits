<?php
	#Controlador responsável por excluir os motoristas do banco de dados.
	include_once("../persistence/conexao.php");
	include_once("../persistence/motoristaDAO.php");
	
	$codigo = $_GET['codigo'];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$motoristadao = new motoristaDao();
	$motoristadao->excluir($codigo, $conexao->getLink());
	$conexao->fechar();
?>