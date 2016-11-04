<?php

echo '
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
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="' . base_url() . 'assets/images/libros/' . $imagen . '" alt="" />
								<h3>ZOOM</h3>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="' . base_url() . 'assets/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>' . $titulo . '</h2>
								<p>Web ID: ' . $id . '</p>
								<img src="' . base_url() . 'assets/images/product-details/rating.png" alt="" />
								<span>
									<span>$ ' . $precio . '</span>
									<label>Cantidad:</label>
									<input type="text" value="1" id="cantidad" />
									<button type="button" class="btn btn-fefault cart" data-id="' . $id . '">
										<i class="fa fa-shopping-cart"></i>
										Agregar
									</button>
								</span>
								<p><b>Disponibilidad:</b> En stock</p>
								<p><b>Condición:</b> Nuevo</p>
								<p><b>Marca:</b> B-STORE</p>
								<a href=""><img src="' . base_url() . 'assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Detalles</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-11">
									<p>' . $descripcion . '</p>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Recomendados</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item">';
								foreach($findByLimitLibros->result() as $libro):
									echo '
									<div class="col-sm-4">
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
								endforeach;
								echo '
								</div>
								<div class="item">';
								foreach($findByLimitLibros->result() as $libro):
									echo '
									<div class="col-sm-4">
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
								endforeach;
								echo '
								</div>';
							echo '
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div><!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>';
