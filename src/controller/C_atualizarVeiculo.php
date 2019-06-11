<?php
	#Controlador responsável por atualizar as informações de veículo
	include_once("../model/veiculo.php");
	include_once("../persistence/conexao.php");
	include_once("../persistence/veiculoDAO.php");
	
    $placa = $_POST['codigo'];
    $cor = $_POST['cor'];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$veiculodao = new veiculoDao();
	$veiculodao->alterar($placa,$cor, $conexao->getLink());
    $conexao->fechar();
    
?>