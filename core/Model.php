<?php 

	class Model 
	{
		
		private $host = "localhost";
		// private $host = "br320.hostgator.com.br";
		private $usuario = "root";
		// private $usuario = "itaca014_geminiw";
		private $senha = "";
		// private $senha = "vitoria22";
		// private $db = "itaca014_geminiweb";
		private $db = "geminiweb";

		public function execute($q){
			
			$mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->db);
			$result = $mysqli->query($q);
			$mysqli->close();
			return $result;
		}
	}
 ?>