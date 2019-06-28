<?php
#Classe responsável por comunicar com o banco de dados, com a tabela veículos.
include_once("../model/cliente.php");
session_start();
class loginAut
{
	function verificaLogin($cnpj,$senha, $link)
	{ 
        $query = "SELECT Senha  FROM Cliente WHERE CNPJ=" . "'$cnpj'";
        $retorno = mysqli_query($link,$query);
        $senhaRetorno = mysqli_fetch_array($retorno);
        if($senhaRetorno[0] == $senha and $senha!=""){
            echo $_SESSION["cnpj"]= $cnpj;
            header('location:../view/gerenciarFrota.php');
            
        }
        else{
            header('location:../index.php?autenticado=false');
            
        }
	}

}
?>
