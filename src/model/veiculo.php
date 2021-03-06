<?php 
#Classe Veículo  com os métodos e atriutos necessários
include_once("../persistence/conexao.php");
class Veiculo{
    private $modelo;
    private $placa;
    private $chassi;
    private $cor;
    private $ano;

    public function __construct($pModelo,$pPlaca,$pChassi,$pCor,$pAno){
        $this->modelo = $pModelo;
        $this->placa = $pPlaca;
        $this->chassi = $pChassi;
        $this->cor = $pCor;
        $this->ano = $pAno;
    }

   

    public function getModelo(){
        return $this->modelo;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getChassi(){
        return $this->chassi;
    }

    public function getCor(){
        return $this->cor;
    }

    public function getAno(){
        return $this->ano;
    }
}
?>