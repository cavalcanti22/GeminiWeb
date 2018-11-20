<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GeminiWeb - Floripa</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?=site_url()?>resources/site/images/favicon.png.ico" type="image/png">

  <!--==== BASE CSS ====-->
  <link href="<?=site_url()?>resources/site/css/bootstrap.css" rel="stylesheet">
  <link href="<?=site_url()?>resources/site/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="<?=site_url()?>resources/site/css/animate.css" rel="stylesheet" type="text/css">
  <link href="<?=site_url()?>resources/site/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 


  <!--==== CUSTOM CSS ====-->
  <link href="<?=site_url()?>resources/site/css/style.css" rel="stylesheet">
  <link href="<?=site_url()?>resources/site/css/responsive.css" rel="stylesheet">    
  <link href="<?=site_url()?>resources/site/css/estilo.css" rel="stylesheet">    

  <!--==== GOOGLE FONTS ====-->
  <link href="https://fonts.googleapis.com/css?family=Roboto%7CSignika:400,600,700" rel="stylesheet">



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

   <!--===== HEADER SECTION =====-->
   <div class="preloader">
    <div class="spinner">
    </div><!--spinner-->
  </div><!--end-preloader-->
  <a class="back-to-top scrollTo back-to-top--active" href="index.html#site-header">
    <span class="fa fa-angle-up"></span>
  </a><!--back-to-top-->
  <div id="home"></div>
  <header id="site-header" class="home-header">
    <div id="particles-js"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#home">Gemini <i class="fa fa-laptop" aria-hidden="true"></i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="active" href="#home">Home</a>
                </li>
                <li><a href="#about">Sobre Nós</a>
                </li>
                <li><a href="#service">Serviços</a>
                </li>
                            <!-- <li><a href="index.html#portfolio">portfolio</a>
                            </li> -->
                            <!-- <li><a href="index.html#testimonials">testimonials</a>
                            </li> -->
                            <li><a href="#contact">Contato</a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </nav>
                <!--nav-->
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 header-text">
                      <h1><?=$abertura['titulo']?></h1>
                      <p><?=$abertura['subtitulo']?> <span id="typer"></span></p>
                      <a href="#contact"><button class="btn-default"><?=$contato['telefone']?></button></a>
                    </div>
                    <!--col-md-12-->
                  </div>
                  <!--row-->
                </div>
                <!--container-->
              </header>
              <!--end-header-section-->

              <?php require $view.".php";?>
              <!--===== FOOTER SECTION =====-->
              <footer class="footer-section">
               <div class="container">
                <div class="row">
                 <div class="col-md-12 col-sm-12 footer-text wow fadeIn" data-wow-delay="0.7s">
                  <p>Copyright © 2017 By <b>Gemini Web Floripa</b> | Todos os Direitos Reservados</p>
                  <p><i class="fa fa-whatsapp" aria-hidden="true"></i> <?=$contato['telefone']?></p>
                  <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?=$contato['email']?></p>
                </div>
                <!--col-md-12-->
              </div>
              <!--row-->
            </div>
            <!--container-->
          </footer>
          <!--end-footer-section-->

          <!--===== JAVASCRIPT FILES =====-->  
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/jquery-2.1.4.min.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/jquery.magnific-popup.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/jquery-mixitup.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/wow.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/particles.min.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/app.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/jquery.typer.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/jquery-validator.js"></script>
          <script type="text/javascript" src="<?=site_url()?>resources/site/js/main.js"></script>
        </body>
        </html>