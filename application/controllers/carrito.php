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
        /*    foreach ($this->modelLibros->findById($_SESSION["libro"][$_SESSION["contador"]]) as $libro) {
                $_SESSION["precioLibro"][$_SESSION["contador"]] = $libro->precioNuevo;
            }*/
            $_SESSION["contador"]++;
        }
        echo $_SESSION["contador"];
	}

}
