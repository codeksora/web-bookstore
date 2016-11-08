<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>B-Store</title>
    <link href="' . base_url() . 'assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/css/price-range.css" rel="stylesheet">
    <link href="' . base_url() . 'assets/css/animate.css" rel="stylesheet">
	<link href="' . base_url() . 'assets/css/main.css" rel="stylesheet">
	<link href="' . base_url() . 'assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="' . base_url() . 'assets/js/html5shiv.js"></script>
    <script src="' . base_url() . 'assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="' . base_url() . 'assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="' . base_url() . '"><img src="' . base_url() . 'assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">';
                            if($this->session->userdata("nombre")):
                                echo '
								<li><a href="' . base_url() . 'cuenta"><i class="fa fa-user"></i> Mi cuenta</a></li>';
                            endif;
                            echo '
                                <li><a href="' . base_url() . 'tienda"><i class="fa fa-book"></i> Tienda</a></li>
								<li><a href="' . base_url() . 'carrito"><i class="fa fa-shopping-cart"></i> Carrito</a></li>';
                            if(!$this->session->userdata("nombre")):
                                echo '
								<li><a href="' . base_url() . 'login"><i class="fa fa-lock"></i> Login</a></li>';
                            endif;

                            if($this->session->userdata("nombre")):
                                echo '
								<li><a href="' . base_url() . 'logout"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>';
                            endif;
                            echo '
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="' . base_url() . '">Inicio</a></li>
								<li class="dropdown"><a href="#">Tienda<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="' . base_url() . 'tienda">Productos</a></li>
										<li><a href="' . base_url() . 'carrito">Carrito</a></li>
										<li><a href="' . base_url() . 'login">Login</a></li>
                                    </ul>
                                </li>
								<li><a href="' . base_url() . 'contactanos">Contáctanos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->';
