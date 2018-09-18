<?php 
class Usuarios 
{
	private $usuario;
	function __construct()
	{
		require 'models/Usuario.php';
		$this->usuario = new Usuario;
		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

	}

	public function index(){
		$data['layout'] = 'views/layouts/admin';
		$data['titulo'] = 'Lista de Usuários';
		$data['view'] = 'views/usuarios/index';
		$data['usuarios'] = $this->usuario->get_all_usuarios();
		return $data;
	}

	public function add(){
		$data['view'] = 'views/usuarios/add';
		$data['titulo'] = 'Adicionar Novo Usuário';
		$data['layout'] = 'views/layouts/admin';


		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			if ($_POST['senha'] === $_POST['rsenha']) {
				
				$u['nome'] = $_POST['nome'];
				$u['email'] = $_POST['email'];
				$u['senha'] = md5($_POST['senha']);
				if (!$this->usuario->insert_usuario($u)) {
					die("ERRO AO ADICIONAR");
				}
				else{

					$_SESSION['feedback'] = "<h6 class='alert alert-success' role='alert'>USUÁRIO ADICIONADO!</h6>";
				}

				$data = $this->index();
			}
			else{

				die("SENHAS DIFERENTES");
			}
		}
		return $data;
	}
// else{
   // 			 $_SESSION['feedback'] = "<h6 class='alert alert-success' role='alert'>EDITADO COM SUCESSO!</h6>";

			// }
	public function edit($id)
	{
		$data['usuario'] = $this->usuario->get_usuario($id);

		if ($data['usuario']) {

			$data['view'] = 'views/usuarios/edit';
			$data['titulo'] = 'Editar Usuário';
			$data['layout'] = 'views/layouts/admin';



			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				if ($_POST['senha'] === $_POST['rsenha']) {

					$u['nome'] = $_POST['nome'];
					$u['email'] = $_POST['email'];
					$u['senha'] = md5($_POST['senha']);

					if (!$this->usuario->update_usuario($id, $u)) {

						die("ERRO AO ATUALIZAR");
					}
					else{
						$_SESSION['feedback'] = "<h6 class='alert alert-primary' role='alert'>USUÁRIO EDITADO!</h6>";
					}
					$data = $this->index();
				}

				else{
					
					die("SENHAS DIFERENTES");

				}
			}
		}

		else {

			die("USUÁRIO NÃO EXISTE");
		}

		return $data;
	}

	public function remove($id){

		$data['usuario'] = $this->usuario->get_usuario($id);

		if ($data['usuario']) {

			if (!$this->usuario->delete_usuario($id)) {
				die('ERRO AO REMOVER USUÁRIO');
			}
			else{
				$_SESSION['feedback'] = "<h6 class='alert alert-danger' role='alert'>USUÁRIO REMOVIDO!</h6>";
			}

			$data = $this->index();
			return $data;
		}
		else{

			die("USUÁRIO NÃO EXISTE");
		}
	}
}
?>