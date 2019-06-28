<?php
	#Controlador responsável por atualizar as informações de veículo
	include_once("../persistence/conexao.php");
	include_once("../persistence/clienteDAO.php");
	
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$clientedao = new clienteDao();
	$clientedao->alterar($email,$endereco,$senha,$conexao->getLink());
    $conexao->fechar();
    
?>