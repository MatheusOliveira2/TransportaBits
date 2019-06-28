<?php 
#Classe Cliente  com os métodos e atriutos necessários
class Cliente{
    private $cnpj;
    private $email;
    private $endereco;
    private $senha;

    public function __construct($pcnpj,$pemail,$pendereco,$psenha){
        $this->cnpj = $pcnpj;
        $this->email = $pemail;
        $this->endereco = $pendereco;
        $this->senha = $psenha;
    }

   

    public function getCnpj(){
        return $this->cnpj;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getSenha(){
        return $this->senha;
    }
}
?>