<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("usuarios");
	}

	public function index() {
        $this->load->view('templates/header');
		$this->load->view('login_view');
		$this->load->view('templates/footer');
	}

    public function registrar() {
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$direccion = $this->input->post("direccion");
		$email = $this->input->post("email");
		$contrasena = $this->input->post("contrasena");

		if(!$this->usuarios->findByEmail($email)):
			$this->usuarios->addUsuario($nombre, $apellido, $direccion, $email, $contrasena);
			echo "true";
		else: echo "false";
		endif;

	}

    public function loguear() {
		$email = $this->input->post("email");
		$contrasena = $this->input->post("contrasena");
		if($this->usuarios->findByEmailAndContrasena($email, $contrasena)):
			$fila = $this->usuarios->findByEmailAndContrasena($email, $contrasena);
			$data = array(
				"id" => $fila->usuarioId,
				"nombre" => $fila->nombre . " " . $fila->apellido,
				"email" => $fila->email,
				"saldo" => $fila->saldo,
				"logeado" => TRUE
			);
			if($fila->admin == 1):
				$data = array(
					"admin-id" => $fila->usuarioId,
					"admin-usuario" => $fila->nombre . " " . $fila->apellido,
					"admin-email" => $fila->email,
					"admin-logeado" => TRUE
				);
				echo "admin";
			endif;
			$this->session->set_userdata($data);
			echo "true";
		else:
			echo "false";
		endif;

	}


}
