<?php 
	class Sites 
	{
		private $pagina;
		private $imagem;

		function __construct()
		{
			require 'models/Pagina.php';
			$this->pagina = new Pagina;
			require 'models/Imagem.php';
			$this->imagem = new Imagem;

		}
		

		public function index(){

			$data['layout'] = 'views/layouts/site';
			$data['view'] = 'views/sites/index';
			$data['abertura'] = $this->pagina->get_pagina(1);
			$data['sobre1'] = $this->pagina->get_pagina(2);
			$data['sobre2'] = $this->pagina->get_pagina(3);
			$data['sobre3'] = $this->pagina->get_pagina(4);
			$data['sobre4'] = $this->pagina->get_pagina(5);
			$data['serv1'] = $this->pagina->get_pagina(6);
			$data['serv2'] = $this->pagina->get_pagina(7);
			$data['serv3'] = $this->pagina->get_pagina(8);
			$data['serv4'] = $this->pagina->get_pagina(9);
			$data['contato'] = $this->pagina->get_pagina(10);
			$data['devimagens'] = $this->imagem->get_all_imagens();

				// fazer desimagens,wpimagens,destudo
			// criar tabelas
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			 {
						if(!isset($_POST["Submit"])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");
			/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
			// if (preg_match("/tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$/", $_SERVER[HTTP_HOST])) {
				$emailsender='contato@geminiweb.com.br';
			// } else {
			// 	$emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
   //      //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
   //      // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
			// }

			/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'cavalcanti22@gmail.com';
$comcopia          =  'contato@geminiweb.com.br';
$assunto           = 'Contato Gemini Web';
$mensagem          = $_POST['mensagem'];


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Esse email foi enviado pelo website <b>GEMINI WEB</b></P>
<P>Aqui est&aacute; a mensagem:</P>
<p><b>Nome:<i></b>'.$nomeremetente.'</i></p>

<p><b>Email:<i></b>'.$emailremetente.'</i></p>

<p><b>Mensagem:<i></b>'.$mensagem.'</i></p>
<hr>';


/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.
if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
	if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
		$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

		/* Enviando a mensagem */
		// if 

		(mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender));
		 // {
			
			// 	echo $_SESSION['feedback'] = "Mensagem Enviada com sucesso!";
		 // }
			// else 
			// {
			// 	echo $_SESSION['feedback'] = "Erro ao enviar a mensagem!";

			// }
		}
		
			
			return $data;
		}	
	}
	?>