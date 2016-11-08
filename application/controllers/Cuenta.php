<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("libros_usuario");
    }

	public function index() {
        if($this->session->userdata("logeado") == TRUE):
            $result = $this->libros_usuario->findByUsuario($this->session->userdata("id"));

    		$data = array(
    			"findByUsuario" => $result
    		);

            $this->load->view('templates/header');
			$this->load->view("cuenta_view", $data);
            $this->load->view('templates/footer');
		else:
			$this->load->view('404');
		endif;
	}

}
