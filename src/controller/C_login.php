<?php
	#Controlador responsável por realizar o login
	include_once("../persistence/conexao.php");
	include_once("../persistence/loginAut.php");
    
    $cnpj = $_POST["cnpj"];
    $senha = $_POST["senha"];

	$conexao = new Connection();
	$conexao->conectar();
	
	$loginaut = new loginAut();
	$loginaut->verificaLogin($cnpj,$senha, $conexao->getLink());
	$conexao->fechar();
?>	