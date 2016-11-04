<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function index() {

		$result = $this->libros->findAll();
		$result1 = $this->libros->findByLimit(3);
		$result2 = $this->categorias->findAll();
		$result3 = $this->libros->findByCategoria();
		$result4 = $this->autores->findAll();

		$data = array(
			"findAllLibros" => $result,
			"findByLimitLibros" => $result1,
			"findAllCategorias" => $result2,
			"findByCategoriaLibros" => $result3,
			"findAllAutores" => $result4
		);

        $this->load->view('templates/header');
		$this->load->view('tienda_view', $data);
		$this->load->view('templates/footer');
	}

	public function detalles($rewrite = "") {

			if($this->libros->findByRewrite($rewrite)):
				$result = $this->categorias->findAll();
				$result1 = $this->autores->findAll();
				$result2 = $this->libros->findByLimit(3);

				$fila = $this->libros->findByRewrite($rewrite);
				$data = array(
					"id" => $fila->libroId,
					"titulo" => $fila->titulo,
					"descripcion" => $fila->descripcion,
					"imagen" => $fila->imagen,
					"precio" => $fila->precioNuevo,
					"findAllCategorias" => $result,
					"findAllAutores" => $result1,
					"findByLimitLibros" => $result2
				);

				$this->load->view('templates/header');
				$this->load->view('detalles_view', $data);
				$this->load->view('templates/footer');
			else:
				$this->load->view('404');
			endif;


	}

}
