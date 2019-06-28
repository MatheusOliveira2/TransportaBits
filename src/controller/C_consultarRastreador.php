<?php
#Controlador responsável por buscar as informações de rastreadores
include_once("../persistence/conexao.php");
include_once("../persistence/rastreadorDAO.php");

$codigo = $_POST['codigo'];

$conexao = new Connection();
$conexao->conectar();

$rastreadordao = new rastreadorDao();
$rastreadordao->consultar($codigo, $conexao->getLink());
$conexao->fechar();
?>
