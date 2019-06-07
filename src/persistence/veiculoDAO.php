<?php
	include_once("../model/veiculo.php");
	
	class VeiculoDAO {
		function cadastrar($veiculo, $link) {
			echo $query = "INSERT INTO Veiculo VALUES ('".($veiculo->getPlaca())."','".($veiculo->getModelo())."','".($veiculo->getChassi())."','".($veiculo->getCor())."',".($veiculo->getAno()).")";
			if(!mysqli_query($link, $query)) die("Erro ao cadastrar") ;
			echo "Cadastrado com Sucesso";
		}
		
		function excluir($codigo, $link) {
			echo $query = "DELETE FROM Veiculo WHERE Placa="."'$codigo'";
			if(!mysqli_query($link, $query)) {
				die("ERRO. Veiculo NÃO EXCLUIDO");
			}
			echo "Veiculo EXCLUIDO";
		}
		
		function consultar($codigo, $link) {
			$query = "SELECT * FROM Veiculo WHERE Placa="."'$codigo'";
			$result = mysqli_query($link, $query);
			if(!$result){
				die("ERRO. Veiculo NÃO ENCONTRADO");
			}
			return $result;
		}
		/*
		function consultarN($nasc, $link) {
			$query = "SELECT * FROM CLIENTE WHERE nascimento>='".($nasc)."'";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUM CLIENTE ENCONTRADO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function alterar($cliente, $link) {
			$query = "update cliente set nome='".($cliente->getNome())."', nascimento='".($cliente->getNascimento())."', salario=".($cliente->getSalario())." WHERE ID=".$cliente->getCodigo();
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>";
        }
        */
	}
?>