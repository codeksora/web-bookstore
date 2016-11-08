<?php

echo '

	<section>
		<div class="container">
			<div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Mis datos</h2>
                    <p>Nombre y Apellido: ' . $this->session->userdata("nombre") . '</p>
                    <p>Email: ' . $this->session->userdata("email") . '</p>
                    <p>Saldo: $ ' . $this->session->userdata("saldo") . '</p>
                </div>

				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Mis libros comprados</h2>';
						foreach ($findByUsuario->result() as $libro):
							echo '<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="' . base_url() . 'assets/images/libros/' . $libro->imagen . '" alt="" />
                                            <h2></h2>
                                            <p>' . $libro->titulo . '</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-download"></i>Descargar</a>
										</div>
									</div>
								</div>
							</div>';
						endforeach;
					echo '
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>';
