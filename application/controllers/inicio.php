<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

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

		if(!isset($_SESSION["contador"])) $_SESSION["contador"] = 0;

		$this->load->view('templates/header');
		$this->load->view('inicio_view', $data);
		$this->load->view('templates/footer');
	}

}
