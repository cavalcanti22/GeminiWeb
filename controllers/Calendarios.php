<?php 

	class Calendarios 
	{
	
		public function index(){

			$data['titulo'] = "Calendário";
			$data['layout'] = "views/layouts/admin";
			$data['view'] = "views/calendarios/index";
			return $data;
		}
	}
?>