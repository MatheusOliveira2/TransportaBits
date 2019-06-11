<?php
	#Classe responsável por conectar com Banco de Dados
	class Connection {
		var $host;
		var $user;
		var $password;
		var $bd;
		var $link;
		
		function __construct() { #Construtor da classe, que define os parâmetros para a conexão com o BD
			$this->host = "localhost"; 
			$this->user = "root";
			$this->password = "";
			$this->bd = "TransportaBits";
		}
		
		function conectar() { #Método responsável por conectar com o banco de dados.
			if(!$this->link) {
				$this->link = mysqli_connect($this->host, $this->user, $this->password, $this->bd);
				if(!$this->link) {die("ERRO! N&Atilde;O FOI POSS&Iacute;VEL CONECTAR NO BD.<br />");}
			}
			
		}
		
		function fechar() {mysqli_close($this->link);}#Método Responsável por fechar a conexão com o banco de dados.
		
		function getLink() {return $this->link;}# Método que retorna o link do mysqli_connect
	}
?>