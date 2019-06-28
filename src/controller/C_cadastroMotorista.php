<?php
	#Controlador responsável por cadastrar os motoristas
	include_once("../model/motorista.php");
	include_once("../persistence/conexao.php");
	include_once("../persistence/motoristaDAO.php");
	
	$motorista = new Motorista($_POST["nome"], $_POST["cnh"],$_POST["veiculo"]);
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$motoristadao = new motoristaDao();
	$motoristadao->cadastrar($motorista, $conexao->getLink());
	$conexao->fechar();
?>	