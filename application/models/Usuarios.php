<?php

 class Usuarios extends CI_Model {

     public function findByEmailAndContrasena($email = "", $contrasena = "") {
         $result = $this->db->get_where('usuarios', array('email' => $email, 'contrasena' => $contrasena), 1);
         return $result->row();
     }

     public function findByEmail($email = "") {
         $result = $this->db->get_where('usuarios', array('email' => $email), 1);
         return $result->row();
     }

     public function updateUsuarios($usuarioId = "",$precioTotal = "") {
         if($this->session->userdata("saldo") >= $precioTotal):
             $saldo = $this->session->userdata("saldo") - $precioTotal;

             $data = array("saldo" => $saldo);
             $this->session->set_userdata($data);
             $this->db->set('saldo', $saldo);
             $this->db->where('usuarioId', $usuarioId);
             return $this->db->update('usuarios');
         endif;
     }

     public function addUsuario($nombre = "", $apellido = "", $direccion = "", $email = "", $contrasena = "") {
         $data = array(
             "nombre" => $nombre,
             "apellido" => $apellido,
             "direccion" => $direccion,
             "email" => $email,
             "contrasena" => $contrasena,
             "saldo" => 0.00
         );

         return $this->db->insert('usuarios', $data);
     }
 }
