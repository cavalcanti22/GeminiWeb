<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel - Gemini Web Floripa</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_url()?>resources/admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url()?>resources/admin/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url()?>resources/admin/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url()?>resources/admin/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=site_url()?>resources/admin/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    <link rel="icon" href="<?=site_url()?>resources/admin/panel.png"  type="image/png">


	<!-- Core JS files -->
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=site_url()?>resources/admin/assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=site_url()."Paginas/index"?>">Gemini Web</a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				<li class="dropdown">
					
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Git updates
							<ul class="icons-list">
								<li><a href="index.html#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
							<li class="media">
								<div class="media-left">
									<a href="index.html#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									Drop the IE <a href="index.html#">specific hacks</a> for temporal inputs
									<div class="media-annotation">4 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="index.html#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
								</div>
								
								<div class="media-body">
									Add full font overrides for popovers and tooltips
									<div class="media-annotation">36 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="index.html#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
								</div>
								
								<div class="media-body">
									<a href="index.html#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
									<div class="media-annotation">2 hours ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="index.html#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
								</div>
								
								<div class="media-body">
									<a href="index.html#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
									<div class="media-annotation">Dec 18, 18:36</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="index.html#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>
								
								<div class="media-body">
									Have Carousel ignore keyboard events
									<div class="media-annotation">Dec 12, 05:46</div>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="index.html#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>


			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown">
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="index.html#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="<?=site_url()?>resources/admin/assets/images/demo/users/face10.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="index.html#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="<?=site_url()?>resources/admin/assets/images/demo/users/face3.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="index.html#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="<?=site_url()?>resources/admin/assets/images/demo/users/face24.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="index.html#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="<?=site_url()?>resources/admin/assets/images/demo/users/face4.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="index.html#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="<?=site_url()?>resources/admin/assets/images/demo/users/face25.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="index.html#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="index.html#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=site_url()?>resources/admin/assets/images/demo/users/tod.png" alt="">
						<span><?=$_SESSION['user']['nome'];?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						
						<li><a href="<?=site_url()."Auths/logout"?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="index.html#" class="media-left"><img src="<?=site_url()?>resources/admin/assets/images/demo/users/tod.png" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?=$_SESSION['user']['nome'];?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Florianópolis, SC
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Menu Principal</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class=""><a href="<?=site_url()."Sites/index"?>" target="_blank"><i class="icon-home4"></i> <span>Site Gemini Web</span></a></li>
								<li>
									<a href="<?=site_url()."Paginas/index"?>"><i class="icon-stack2"></i> <span>Páginas</span></a>

								</li>
								<li>
									<a href="<?=site_url()."Imagens/index"?>"><i class="icon-grid6"></i> <span>Portfólio</span></a>

								</li>
								<li>
									<a href="<?=site_url()."Usuarios/index"?>" id=""><i class="icon-people"></i> <span>Usuários</span></a>
								</li>
								<li>
									<a href="<?=site_url()."Calendarios/index"?>" id=""><i class="icon-people"></i> <span>Usuários</span></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->
				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

		<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$titulo;?></span></h4>
						</div>
						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="<?=site_url()?>Usuarios/add" class="btn btn-link btn-float has-text"><i class="icon-people"></i> <span>Adicionar Usuário</span></a>
								<a href="<?=site_url()?>Imagens/add" class="btn btn-link btn-float has-text"><i class="icon-grid6"></i> <span>Adicionar Portfólio</span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="cpage-header page-header-default">
					<div class="page-header-content">
						<?php require $view.".php"; ?>
					</div>
				</div>
				<!-- /content area -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->

</body>
</html>
