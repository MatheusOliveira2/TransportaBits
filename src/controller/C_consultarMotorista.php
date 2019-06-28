<?php
#Controlador responsável por buscar as informações de veículos
include_once("../persistence/conexao.php");
include_once("../persistence/motoristaDAO.php");

$codigo = $_POST['codigo'];

$conexao = new Connection();
$conexao->conectar();

$motoristadao = new motoristaDao();
$motoristadao->consultar($codigo, $conexao->getLink());
$linha = mysqli_fetch_row($resultado);
$conexao->fechar();
?>
