<?php
	#Controlador responsável por atualizar as informações de Motorista
	include_once("../persistence/conexao.php");
	include_once("../persistence/motoristaDAO.php");
	
    $veiculo = $_POST['veiculo'];
    $cnh = $_POST['cnh'];
    
	$conexao = new Connection();
	$conexao->conectar();
	
	$motoristadao = new motoristaDao();
	$motoristadao->alterar($veiculo,$cnh, $conexao->getLink());
    $conexao->fechar();
    
?>