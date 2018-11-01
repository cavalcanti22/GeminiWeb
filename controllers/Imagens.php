<?php
class Imagens extends Ext
{
	private $imagem;

	function __construct()
	{
		require "models/Imagem.php";
		$this->imagem = new Imagem;

		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");
	}

	public function index()
	{
			$data['titulo'] = 'Lista de Sites';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/imagens/index";
			$data['imagens'] = $this->imagem->get_all_imagens();
			return $data;
	}
	public function add()
	{
		$data['titulo'] = 'Adicionar Site';
		$data['layout'] = 'views/layouts/admin';
		$data['view'] = "views/imagens/add";

		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{

			if ( isset($_FILES['imagem']) )
			{

				if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 10000000 )
				{
					$caminho = "resources/site/images/";
					$uniqid = md5(uniqid(rand(), true));
    				$nome = $this->nome_ext($uniqid,'imagem');
					$arquivo = $caminho . $nome;

					if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
					{
						$_POST['imagem'] = $arquivo;
						if (!$this->imagem->insert_imagem($_POST))
						{
							unlink($arquivo);
							die("ERRO AO CADASTRAR!");
						}
					
						$data = $this->index();
					}
					else
					{
						die('HOUVE UM ERRO NO UPLOAD DA IMAGEM!');
					}
				}
				else
				{
					die("Permitido somente imagens do tipo .JPG com no máx. 4MB!");
				}
			}
			else
			{
				$imgantiga = $this->imagem->get_imagem($id);
				$_POST['imagem'] = $imgantiga['imagem'];

				if (!$this->imagem->insert_imagem($_POST))
				{
					die("ERRO AO CADASTRAR!");
				}
				$data = $this->index();				
			}

		}

		return $data;		
	}

	public function edit($id)
	{
		$data['imagem'] = $this->imagem->get_imagem($id);
		if ($data['imagem'])
		{
			$data['titulo'] = 'Atualizar Site';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/imagens/edit";

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem']) AND $_FILES['imagem']['size'] > 0 )
				{
					
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png' ) AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/";
						$uniqid = md5(uniqid(rand(), true));
	    				$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->imagem->update_imagem($id, $_POST))
							{
								unlink($arquivo);
								die("ERRO AO ATUALIZAR!");
							}
							else
							{
								unlink($data['imagem']['imagem']);
							}
							$data = $this->index();
						}
						else
						{
							die('HOUVE UM ERRO NO UPLOAD DA IMAGEM!');
						}
					}
					else
					{
						die("Permitido somente imagens do tipo .JPG ou .PNG com no máx. 2MB!");
					}
				}
				else
				{
					$imgantiga = $this->imagem->get_imagem($id);
					$_POST['imagem'] = $imgantiga['imagem'];
					if (!$this->imagem->update_imagem($id, $_POST))
					{
						die("ERRO AO ATUALIZAR!");
					}
					$data = $this->index();				
				}

			}

			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE SERVIÇO NÃO EXISTE!</p>");
		}
	}

	public function remove($id)
	{
		$data['imagem'] = $this->imagem->get_imagem($id);
		if ($data['imagem'])
		{
			if (!$this->imagem->delete_imagem($id))
			{
				die("<p style='color:red'>ERRO AO DELETAR!</p>");
			}

			else
			{
				unlink($data['imagem']['imagem']);
			}
			$data = $this->index();
			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE SERVIÇO NÃO EXISTE!</p>");
		}
	}

}
?>