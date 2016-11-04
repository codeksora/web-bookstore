<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('carrito_view');
		$this->load->view('templates/footer');
	}

    public function contador() {
        if($this->input->post("id")) {
            $_SESSION["libro"][$_SESSION["contador"]] = $this->input->post("id");
            $_SESSION["cantidad"][$_SESSION["contador"]] = 1;

            $fila = $this->libros->findById($_SESSION["libro"][$_SESSION["contador"]]);
                $_SESSION["precioLibro"][$_SESSION["contador"]] = $fila->precioNuevo;
            $_SESSION["contador"]++;
        }

        if(!isset($_SESSION["libro"]) || (count($_SESSION["libro"]) == 0)) echo "<tr><td colspan='6' align='center' class='cart_description'>No hay libros en el carrito</td></tr>";

        for($i = 0; $i<$_SESSION["contador"]; $i++):
            if(array_key_exists($i, $_SESSION["libro"])):
                $fila = $this->libros->findById($_SESSION["libro"][$i]);
                    echo '
            <tr>
                <td class="cart_product">
                    <a href=""><img width="60" src="' . base_url() . 'assets/images/libros/' . $fila->imagen . '" alt=""></a>
                </td>
                <td class="cart_description">
                    <h4><a href="">' . $fila->titulo . '</a></h4>
                    <p>ID: ' . $fila->libroId . '</p>
                </td>
                <td class="cart_price">
                    <p>$ ' . $fila->precioNuevo . '</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <a class="cart_quantity_up" href=""> + </a>
                        <input class="cart_quantity_input" data-id="' . $i . '" type="text" name="quantity" value="' . $_SESSION["cantidad"][$i] . '" autocomplete="off" size="2" disabled>
                        <a class="cart_quantity_down" href=""> - </a>
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">$ ' . number_format($_SESSION["precioLibro"][$i], 2, '.', '') . '</p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete" href="#" data-id="' . $i . '"><i class="fa fa-times"></i></a>
                </td>
            </tr>';
            endif;
        endfor;
	}

}
