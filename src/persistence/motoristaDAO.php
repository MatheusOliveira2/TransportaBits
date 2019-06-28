<?php
#Classe responsável por comunicar com o banco de dados, com a tabela veículos.
include_once("../model/motorista.php");
session_start();

class MotoristaDAO
{
	function cadastrar($motorista, $link)
	{ #método responsável por cadastrar veículos no banco de dados.
		$cnpj = $_SESSION["cnpj"];
		echo $query = "INSERT INTO Motorista VALUES (" . ($motorista->getCnh()) . ",'" . ($motorista->getNome()) . "','" . ($motorista->getVeiculo()) . "',". $cnpj . ")";
		if (!mysqli_query($link, $query)) die(header('location:../view/cadastrarMotorista.php?funcionou=false'));
		header('location:../view/cadastrarMotorista.php?funcionou=true');
	}

	function excluir($codigo, $link)
	{ #método responsável por excluir veículos no banco de dados.
		$query = "DELETE FROM Motorista WHERE CNH=" . "'$codigo'";
		if (!mysqli_query($link, $query)) die(header('location:../view/consultarMotorista.php?excluiu=false'));
		header('location:../view/consultarMotorista.php?excluiu=true');
	}

	function consultar($codigo, $link)
	{ #método responsável por consultar veículos no banco de dados.
		$query = "SELECT * FROM Motorista WHERE CNH=" . "'$codigo'";
		$result = mysqli_query($link, $query);
		$row = $result->fetch_assoc();
		if (!$result) {
			die(header('location:../view/consultarMotorista.php?funcionou=false'));
		}
		$_SESSION["result"] = $row;
		header('location:../view/consultarMotorista.php?funcionou=true');
	}

	function alterar($veiculo,$cnh,$link)
	{ #método responsável por alterar informações de veículos no banco de dados.
		$query = "UPDATE Motorista set Veiculo_Placa = '$veiculo' WHERE CNH=" . "$cnh";
		if (!mysqli_query($link, $query)) die(header('location:../view/atualizarMotorista.php?funcionou=false'));
		header('location:../view/atualizarMotorista.php?funcionou=true');
	}
}
?>
