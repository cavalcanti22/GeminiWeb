<?php 
	class Auth extends Model
	{

		public function login($u){
			$email = $u['email'];
			$senha = $u['senha'];
			$q = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
			return mysqli_fetch_assoc($this->execute($q));
		}
	}
 ?>