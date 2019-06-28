<?php 
#Classe motorista com os métodos e atriutos necessários
include_once("../persistence/conexao.php");
class Motorista{
    private $nome;
    private $cnh;
    private $veiculo;

    public function __construct($pnome,$pcnh,$pveiculo){
        $this->nome = $pnome;
        $this->cnh = $pcnh;
        $this->veiculo = $pveiculo;
    }

   

    public function getNome(){
        return $this->nome;
    }

    public function getCnh(){
        return $this->cnh;
    }

    public function getVeiculo(){
        return $this->veiculo;
    }

}
?>