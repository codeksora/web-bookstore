<?php

echo '
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Libro</td>
							<td class="description"></td>
							<td class="price">Precio</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Precio total de la compra</h3>
				<p>Una vez finalizada la compra, este será enviado por delivery a su domicilio, y lo tendrá tambien disponible en versión digital.</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Sub Total <span>$ 0.00</span></li>
							<li>Eco Tax <span>$ 0.00</span></li>
							<li>Shipping Cost <span>Gratis</span></li>
							<li>Total <span id="precioTotal">$ 0.00</span></li>
						</ul>
								<a class="btn btn-default update" href="' . base_url() . 'tienda">Actualizar</a>
							<a class="btn btn-default check_out" href="' . base_url() . 'finalizarcompra">Finalizar compra</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->';
