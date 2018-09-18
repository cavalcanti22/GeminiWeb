<?php 
class Auths 
{
	private $auth;

	function __construct()
	{
		require 'models/Auth.php';
		$this->auth = new Auth;
	}

	public function index(){
		$data['layout'] = "views/layouts/login";
		$data['view'] = "views/auths/index";
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$u['email'] = $_POST['email'];
			$u['senha'] = md5($_POST['senha']);
			$user = $this->auth->login($u);
			if ($user) {
				$_SESSION['user'] = $user;
				header("Location: ".site_url()."Usuarios");
			}

			else{
				$_SESSION['feedback'] = '<h2 style="color:red;"><center>USUÁRIO OU SENHA INVÁLIDOS<center></h2>';
			}
		}
		return $data;
	}

	public function logout(){
		session_destroy();
		header("Location: ".site_url()."");
	}
}
?>