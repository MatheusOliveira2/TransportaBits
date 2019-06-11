<?php
	#Classe responsável por comunicar com o banco de dados, com a tabela veículos.
	include_once("../model/veiculo.php");
	
	class VeiculoDAO {
		function cadastrar($veiculo, $link) { #método responsável por cadastrar veículos no banco de dados.
			echo $query = "INSERT INTO Veiculo VALUES ('".($veiculo->getPlaca())."','".($veiculo->getModelo())."','".($veiculo->getChassi())."','".($veiculo->getCor())."',".($veiculo->getAno()).")";
			if(!mysqli_query($link, $query)) die("Erro ao cadastrar") ;
			echo "Cadastrado com Sucesso";
		}
		
		function excluir($codigo, $link) { #método responsável por excluir veículos no banco de dados.
			echo $query = "DELETE FROM Veiculo WHERE Placa="."'$codigo'";
			if(!mysqli_query($link, $query)) {
				die("ERRO. Veiculo NÃO EXCLUIDO");
			}
			echo "Veiculo EXCLUIDO";
		}
		
		function consultar($codigo, $link) { #método responsável por consultar veículos no banco de dados.
			$query = "SELECT * FROM Veiculo WHERE Placa="."'$codigo'";
			$result = mysqli_query($link, $query);
			if(!$result){
				die("ERRO. Veiculo NÃO ENCONTRADO");
			}
			return $result;
		}
		
		function alterar($placa, $cor,$link) { #método responsável por alterar informações de veículos no banco de dados.
			$query = "UPDATE Veiculo set Cor = '$cor' WHERE Placa="."'$placa'";
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/atualizarVeiculo.php\">VOLTAR</a>";
        }
        
	}
?>