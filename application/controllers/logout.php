<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index() {
		if($this->session->userdata("logeado") == TRUE):
			$this->session->sess_destroy();
			redirect(base_url());
		else:
			$this->load->view('404');
		endif;
	}

}
