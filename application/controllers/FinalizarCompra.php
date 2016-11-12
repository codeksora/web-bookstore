<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinalizarCompra extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model("libros_usuario");
        $this->load->model("usuarios");
	}


	public function index() {
        if($this->session->userdata("logeado") == TRUE):
            if($this->usuarios->updateUsuarios($this->session->userdata("id"), $this->session->userdata("precioTotal"))):
                for($i = 0; $i<$_SESSION["contador"]; $i++):
                    if(array_key_exists($i, $_SESSION["libro"])):
                        $this->libros_usuario->addCompra($this->session->userdata("id"), $_SESSION["libro"][$i], $_SESSION["cantidad"][$i]);
                    endif;
                endfor;
                echo "1";
            else:
                echo "2";
            endif;
		else:
            echo "3";
		endif;
	}

}
