<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index() {
		if($this->session->userdata("logeado") == TRUE):
			$data = array(
				"logeado" => FALSE
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		else:
			$this->load->view('404');
		endif;
	}

	public function admin() {
		if($this->session->userdata("admin-logeado") == TRUE):
			$data = array(
				"admin-logeado" => FALSE
			);
			$this->session->set_userdata($data);
			redirect(base_url() . "admin");
		else:
			$this->load->view('404');
		endif;
	}

}
