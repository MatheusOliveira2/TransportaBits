<?php
#Classe responsável por comunicar com o banco de dados, com a tabela cliente.
include_once("../model/cliente.php");
session_start();
class ClienteDAO
{
	function cadastrar($cliente, $link)
	{ #método responsável por cadastrar clientes no banco de dados.
		echo $query = "INSERT INTO Cliente VALUES (" . ($cliente->getCnpj()) . ",'" . ($cliente->getEmail()) . "','" . ($cliente->getEndereco()) . "','" . ($cliente->getSenha()) . "')";
		if (!mysqli_query($link, $query)) die(header('location:../view/cadastrarCliente.php?funcionou=false'));
		header('location:../view/cadastrarCliente.php?funcionou=true');
	}

	function excluir($codigo, $link)
	{ #método responsável por excluir clientes no banco de dados.
		$query = "DELETE FROM Cliente WHERE CNPJ=" . "$codigo";
		if (!mysqli_query($link, $query)) die(header('location:../view/gerenciarConta.php?excluiu=false'));
		unset($_SESSION['cnpj']);
		header('location:../index.php?excluiu=true');
	}

	function alterar($email, $endereco, $senha, $link)
	{ #método responsável por alterar informações de clientes no banco de dados.
		$cnpj = $_SESSION["cnpj"];
		$query = "UPDATE Cliente set Email = '$email', Endereco = '$endereco', Senha='$senha' WHERE CNPJ=" . "$cnpj";
		if (!mysqli_query($link, $query)) die(header('location:../view/gerenciarConta.php?funcionou=false'));
		header('location:../view/gerenciarConta.php?funcionou=true');
	}
}
?>
