<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(' | ', true, 'right'); ?>Home WP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>

	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet.url'); ?>"> -->
</head>
<body>
	<header>
		<div class="col-sm-12 hidden-xs" id="top-nav">
			<nav id="top-menu">
				<ul>
					<li><a href="#">Peça seu Cartão de Cliente</a></li>
					<li><a href="#"><i class="fa fa-barcode"></i> &nbsp;Solicite a 2º via do boleto</a></li>
					<li><a href="#">Encontre uma loja</a></li>
					<li><a href="#">Assine a newsletter</a></li>
					<li>
						<div id="busca-topo">
						<div id="top-form">
							<input type="search" placeholder="Busca" name="keywords" size="30" />
	    					<button type="submit" title="Buscar"><i class="fa fa-search"></i></button>
						</div>

				</div>
					</li>
				</ul>
			</nav>
		</div>
		<div class="navbar-wrapper">
		  <div class="container">
			  <a href="#"><img id="logo" class="img-responsive" src="wp-content/themes/temaWP/img/logo.png"></a>
			  <nav id="nav-main" class="navbar-static-top">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div>
			        <div id="navbar" class="navbar-prim navbar-right navbar-collapse">
			        <?php
                        wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                                   );
                    ?>	

			          <!-- <ul class="nav navbar-nav">
			            <li><a href="#">Home</a></li>
			            <li><a href="#about">About</a></li>
			            <li><a href="#contact">Contact</a></li>
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Action</a></li>
			                <li><a href="#">Another action</a></li>
			                <li><a href="#">Something else here</a></li>
			                <li role="separator" class="divider"></li>
			                <li class="dropdown-header">Nav header</li>
			                <li><a href="#">Separated link</a></li>
			                <li><a href="#">One more separated link</a></li>
			              </ul>
			            </li>
			          </ul> -->
			        </div>
			      </div>
			    </nav>
			  </div>
		</div>
		<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img class="first-slide" src="wp-content/themes/temaWP/img/slide1.jpg" alt="First slide">
		    </div>
		    <div class="item">
		      <img class="second-slide" src="wp-content/themes/temaWP/img/slide2.jpg" alt="Second slide">
		    </div>
		    <div class="item">
		      <img class="third-slide" src="wp-content/themes/temaWP/img/slide1.jpg" alt="Third slide">
		    </div>
		  </div>
		</div>
		  <a id="slides" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span id="prevslide"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a id="slides" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  	<span id="nextslide"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</header>
