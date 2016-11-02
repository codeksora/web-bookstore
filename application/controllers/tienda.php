<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function index() {
        $this->load->view('templates/header');
		$this->load->view('tienda_view');
		$this->load->view('templates/footer');
	}

	public function detalles($rewrite = "") {

			if($this->libros->findByRewrite($rewrite)):
				$fila = $this->libros->findByRewrite($rewrite);
				$data = array(
					"titulo" => $fila->titulo,
					"descripcion" => $fila->descripcion,
					"imagen" => $fila->imagen
				);

				$this->load->view('templates/header');
				$this->load->view('detalles_view', $data);
				$this->load->view('templates/footer');
			else:
				$this->load->view('404');
			endif;


	}

}
