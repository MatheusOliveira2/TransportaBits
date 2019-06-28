<?php
	#Controlador responsável por excluir os veiculos do banco de dados.
	include_once("../persistence/conexao.php");
	include_once("../persistence/clienteDAO.php");
	session_start();
	$codigo = $_SESSION["cnpj"];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$clientedao = new clienteDao();
	$clientedao->excluir($codigo, $conexao->getLink());
	$conexao->fechar();
?>