<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactanos extends CI_Controller {

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('contactanos_view');
		$this->load->view('templates/footer');
	}

}
