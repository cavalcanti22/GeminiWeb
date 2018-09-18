<?php 
	/**
	* 
	*/
	class Paginas extends Ext
	{
		private $pagina;

		function __construct()
		{
			require 'models/Pagina.php';
			$this->pagina = new Pagina;
			isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");

		}


		public function index(){

			$data['titulo'] = "Título Páginas";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/paginas/index";
			$data['paginas'] = $this->pagina->get_all_paginas();
			return $data;
		}

		public function edit($id){

			$data['titulo'] = "Editar Página";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/paginas/edit";
			$data['pagina'] = $this->pagina->get_pagina($id);
			$id = $data['pagina']['id'];
			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem']) AND $_FILES['imagem']['size'] > 0 )
				{

					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/images/";
						$uniqid = md5(uniqid(rand(), true));
						$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->pagina->update_pagina($id, $_POST))
							{
								unlink($arquivo);
								die("ERRO AO ATUALIZAR!");
							}

							else

							{
								unlink($data['pagina']['imagem']);
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
						die("Permitido somente imagens do tipo .JPG e .PNG com no máx. 2MB!");
					}
				}
				else
				{
					$imgantiga = $this->pagina->get_pagina($id);
					$_POST['imagem'] = $imgantiga['imagem'];
					if (!$this->pagina->update_pagina($id, $_POST))
					{
						die("ERRO AO ATUALIZAR!");
					}
					$data = $this->index();				
				}

			}
			return $data;
		}
	}
	?>