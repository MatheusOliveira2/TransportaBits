<?php
	#Controlador responsável por cadastrar os clientes
	include_once("../model/cliente.php");
	include_once("../persistence/conexao.php");
	include_once("../persistence/clienteDAO.php");
	
	$cliente = new cliente($_POST["cnpj"], $_POST["email"],$_POST["endereco"], $_POST["senha"]);
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$clientedao = new clienteDao();
	$clientedao->cadastrar($cliente, $conexao->getLink());
	$conexao->fechar();
?>	