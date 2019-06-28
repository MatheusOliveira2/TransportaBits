<?php 
#Classe rastreador com os métodos e atriutos necessários
include_once("../persistence/conexao.php");
class Rastreador{
    private $modelo;
    private $nSerie;
    private $veiculo;

    public function __construct($pmodelo,$pnSerie,$pveiculo){
        $this->modelo = $pmodelo;
        $this->nSerie = $pnSerie;
        $this->veiculo = $pveiculo;
    }

   

    public function getModelo(){
        return $this->modelo;
    }

    public function getNserie(){
        return $this->nSerie;
    }

    public function getVeiculo(){
        return $this->veiculo;
    }

}
?>