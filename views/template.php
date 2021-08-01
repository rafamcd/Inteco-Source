<!DOCTYPE html>
<html lang="pt-br">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inteco Tecnologia Informática LTDA</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
       

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/new/favicon.ico">        
    </head>

    <body>
        
        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo BASE_URL; ?>">Inteco Tecnologia Informática LTDA</a>
				</div>
				
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown active">
							<a href="<?php echo BASE_URL; ?>">
								<i class="fa fa-home"></i><br>Home 
							</a>							
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-briefcase"></i><br>Empresa <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo BASE_URL; ?>quemsomos"> <i class="fa fa-angle-double-right"> </i> &nbsp;&nbsp; Quem Somos</a></li>
								<li><a href="<?php echo BASE_URL; ?>equipe"> <i class="fa fa-angle-double-right"> </i> &nbsp;&nbsp; Equipe</a></li>								
								<li><a href="<?php echo BASE_URL; ?>painel" target="_blank"> <i class="fa fa-angle-double-right"> </i> &nbsp;&nbsp; Acesso Restrito</a></li>								
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-building"></i><br>Clientes <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo BASE_URL; ?>clientes"> <i class="fa fa-angle-double-right"> </i> &nbsp;&nbsp; Nossos Clientes</a></li>
								<li><a href="<?php echo BASE_URL; ?>painel" target="_blank"> <i class="fa fa-angle-double-right"> </i> &nbsp;&nbsp; Liberação de Senhas</a></li>								
							</ul>
						</li>
                                                
                                                <li>
							<a href="<?php echo BASE_URL; ?>sistemas"><i class="fa fa-database"></i><br>Sistemas</a>
						</li>	

						<li>
							<a href="<?php echo BASE_URL; ?>painel" target="_blank"><i class="fa fa-key"></i><br>Lib. Senhas</a>
						</li>						
						<li>
							<a href="<?php echo BASE_URL; ?>contato"><i class="fa fa-envelope"></i><br>Contato</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>        
        
        <?php
             $this->loadViewInTemplate($viewName, $viewData);
	        ?>
        <div style="clear:both"></div>
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>