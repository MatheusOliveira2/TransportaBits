<?php
	#Controlador responsável por atualizar as informações do Rastredor
	include_once("../persistence/conexao.php");
	include_once("../persistence/rastreadorDAO.php");
	
    $placa = $_POST['placa'];
    $nSerie = $_POST['nSerie'];
    
	$conexao = new Connection();
	$conexao->conectar();
	
	$rastreadordao = new rastreadorDao();
	$rastreadordao->alterar($placa,$nSerie, $conexao->getLink());
    $conexao->fechar();
    
?>