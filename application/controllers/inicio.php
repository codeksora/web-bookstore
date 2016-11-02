<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index() {
		$result = $this->libros->findAll();
		$data = array("findAllLibros" => $result);

		$this->load->view('templates/header');
		$this->load->view('inicio_view', $data);
		$this->load->view('templates/footer');
	}

}
