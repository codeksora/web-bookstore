<?php
echo '
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>B-Store | Dashboard</title>

<link href="' . base_url() . 'assets/css/bootstrap.min.css" rel="stylesheet">
<link href="' . base_url() . 'assets/css/datepicker3.css" rel="stylesheet">
<link href="' . base_url() . 'assets/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="' . base_url() . 'assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="' . base_url() . 'assets/js/html5shiv.js"></script>
<script src="' . base_url() . 'assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>B-STORE </span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> ' . $this->session->userdata("admin-usuario") . ' <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="' . base_url() . 'logout/admin"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Cerrar sesión</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscar">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="/admin/dashboard"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
		</ul>

	</div><!--/.sidebar-->';
