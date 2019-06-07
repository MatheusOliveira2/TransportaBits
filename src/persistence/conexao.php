<?php
	class Connection {
		var $host;
		var $user;
		var $password;
		var $bd;
		var $link;
		
		function __construct() {
			$this->host = "localhost"; 
			$this->user = "root";
			$this->password = "";
			$this->bd = "TransportaBits";
		}
		
		function conectar() {
			if(!$this->link) {
				$this->link = mysqli_connect($this->host, $this->user, $this->password, $this->bd);
				if(!$this->link) {die("ERRO! N&Atilde;O FOI POSS&Iacute;VEL CONECTAR NO BD.<br />");}
			}
			
		}
		
		function fechar() {mysqli_close($this->link);}
		
		function getLink() {return $this->link;}
	}
?>