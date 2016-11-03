<?php

echo '
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">';
							foreach ($findByLimitLibros->result() as $libro):
								echo '
								<div class="item">
									<div class="col-sm-6">
										<h1><span>B</span>-STORE</h1>
										<h2>' . $libro->titulo . '</h2>
										<p>' . $libro->descripcion . '</p>
										<a href="' . base_url() . 'tienda/' . $libro->rewrite . '" class="btn btn-default get">Recibir ahora</a>
									</div>
									<div class="col-sm-6">
										<img src="' . base_url() . 'assets/images/libros/' . $libro->imagen . '" class="girl img-responsive" alt="" />
									</div>
								</div>';
							endforeach;
							echo '
						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categoría</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->';
						foreach ($findAllCategorias->result() as $categoria):
							echo '
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">' . $categoria->descripcion . '</a></h4>
								</div>
							</div>';
						endforeach;
						echo '
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Autores</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">';
								foreach ($findAllAutores->result() as $autores):
									echo '
									<li><a href="#">' . $autores->nombre . '</a></li>';
								endforeach;
								echo '
								</ul>
							</div>
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							<h2>Rango</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="' . base_url() . 'assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Últimos libros</h2>';
						foreach ($findAllLibros->result() as $libro):
							echo '<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="' . base_url() . 'assets/images/libros/' . $libro->imagen . '" alt="" />
											<h2>$ ' . $libro->precioNuevo . '</h2>
											<p>' . $libro->titulo . '</p>
											<a href="' . base_url() . 'tienda/' . $libro->rewrite . '" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$ ' . $libro->precioNuevo . '</h2>
												<p>' . $libro->titulo . '</p>
												<a href="' . base_url() . 'tienda/' . $libro->rewrite . '" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
											</div>
										</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
										</ul>
									</div>
								</div>
							</div>';
						endforeach;
					echo '
					</div><!--features_items-->

					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">';
							foreach ($findAllCategorias->result() as $categoria):
								echo '
								<li><a href="#' . $categoria->categoriaId . '" data-toggle="tab">' . $categoria->descripcion . '</a></li>';
							endforeach;
							echo '
							</ul>
						</div>
						<div class="tab-content">';
						foreach ($findAllCategorias->result() as $categoria):
							echo '
							<div class="tab-pane fade in" id="' . $categoria->categoriaId . '" >';
							$i = 0;
							foreach ($findByCategoriaLibros->result() as $libro):
								if($libro->categoriaId == $categoria->categoriaId && $i<4):
									$i++;
								echo '
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="' . base_url() . 'assets/images/libros/' . $libro->imagen . '" alt="" />
												<h2>$ ' . $libro->precioNuevo . '</h2>
												<p>' . $libro->titulo . '</p>
												<a href="' . base_url() . 'tienda/' . $libro->rewrite . '" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
											</div>
										</div>
									</div>
								</div>';
								endif;
							endforeach;
							echo '
							</div>';
						endforeach;
							echo '
						</div>
					</div><!--/category-tab-->
				</div>
			</div>
		</div>
	</section>';
