<?php
#Classe responsável por comunicar com o banco de dados, com a tabela veículos.
include_once("../model/veiculo.php");
session_start();

class VeiculoDAO
{
	function cadastrar($veiculo, $link)
	{ #método responsável por cadastrar veículos no banco de dados.
		$cnpj = $_SESSION["cnpj"];
		echo $query = "INSERT INTO Veiculo VALUES ('" . ($veiculo->getPlaca()) . "','" . ($veiculo->getModelo()) . "','" . ($veiculo->getChassi()) . "','" . ($veiculo->getCor()) . "'," . ($veiculo->getAno()) . "," . ($cnpj). ")";
		if (!mysqli_query($link, $query)) die(header('location:../view/cadastrarVeiculo.php?funcionou=false'));
		header('location:../view/cadastrarVeiculo.php?funcionou=true');
	}

	function excluir($codigo, $link)
	{ #método responsável por excluir veículos no banco de dados.
		echo $query = "DELETE FROM Veiculo WHERE Placa=" . "'$codigo'";
		if (!mysqli_query($link, $query)) die(header('location:../view/consultarVeiculo.php?excluiu=false'));
		header('location:../view/consultarVeiculo.php?excluiu=true');
	}

	function consultar($codigo, $link)
	{ #método responsável por consultar veículos no banco de dados.
		$query = "SELECT * FROM Veiculo WHERE Placa=" . "'$codigo'";
		$result = mysqli_query($link, $query);
		$row = $result->fetch_assoc();
		if (!$result) {
			die(header('location:../view/consultarVeiculo.php?funcionou=false'));
		}
		$_SESSION["result"] = $row;
		header('location:../view/consultarVeiculo.php?funcionou=true');
		
	}

	function alterar($placa, $cor, $link)
	{ #método responsável por alterar informações de veículos no banco de dados.
		$query = "UPDATE Veiculo set Cor = '$cor' WHERE Placa=" . "'$placa'";
		if (!mysqli_query($link, $query)) die(header('location:../view/atualizarVeiculo.php?funcionou=false'));
		header('location:../view/atualizarVeiculo.php?funcionou=true');
	}
}
