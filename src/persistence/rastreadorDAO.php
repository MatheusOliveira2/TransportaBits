<?php
#Classe responsável por comunicar com o banco de dados, com a tabela veículos.
include_once("../model/rastreador.php");
session_start();

class RastreadorDAO
{
	function cadastrar($rastreador, $link)
	{ #método responsável por cadastrar veículos no banco de dados.
		$cnpj = $_SESSION["cnpj"];
		$query = "INSERT INTO Rastreador VALUES (" . ($rastreador->getNserie()) . ",'" . ($rastreador->getModelo()) . "','" . ($rastreador->getVeiculo()) . "',". $cnpj . ")";
		if (!mysqli_query($link, $query)) die(header('location:../view/cadastrarRastreador.php?funcionou=false'));
		header('location:../view/cadastrarRastreador.php?funcionou=true');
	}

	function excluir($codigo, $link)
	{ #método responsável por excluir veículos no banco de dados.
		$query = "DELETE FROM Rastreador WHERE NSerie=" . "'$codigo'";
		if (!mysqli_query($link, $query)) die(header('location:../view/consultarRastreador.php?excluiu=false'));
		header('location:../view/consultarRastreador.php?excluiu=true');
	}

	function consultar($codigo, $link)
	{ #método responsável por consultar veículos no banco de dados.
		$query = "SELECT * FROM Rastreador WHERE NSerie=" . "'$codigo'";
		$result = mysqli_query($link, $query);
		$row = $result->fetch_assoc();
		if (!$result) {
			die(header('location:../view/consultarRastreador.php?funcionou=false'));
		}
		$_SESSION["result"] = $row;
		header('location:../view/consultarRastreador.php?funcionou=true');
	}

	function alterar($placa, $nSerie, $link)
	{ #método responsável por alterar informações de veículos no banco de dados.
		$query = "UPDATE Rastreador set Veiculo_Placa = '$placa' WHERE NSerie=" . "$nSerie";
		if (!mysqli_query($link, $query)) die(header('location:../view/atualizarRastreador.php?funcionou=false'));
		header('location:../view/atualizarRastreador.php?funcionou=true');
	}
}
?>
