<?php
	#Controlador responsável por cadastrar os rastreadors
	include_once("../model/rastreador.php");
	include_once("../persistence/conexao.php");
	include_once("../persistence/rastreadorDAO.php");
	
	$rastreador = new Rastreador($_POST["modelo"], $_POST["nSerie"],$_POST["veiculo"]);
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$rastreadordao = new rastreadorDao();
	$rastreadordao->cadastrar($rastreador, $conexao->getLink());
	$conexao->fechar();
?>	ome