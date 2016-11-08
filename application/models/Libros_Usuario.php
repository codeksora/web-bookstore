<?php

 class Libros_Usuario extends CI_Model {

     public function findByUsuario($usuario = "") {
         $this->db->from('libros_usuario');
         $this->db->join('libros', 'libros_usuario.libroid = libros.libroid', "left");
         $this->db->join('usuarios', 'libros_usuario.usuarioId = usuarios.usuarioid', "left");
         $this->db->where("usuarios.usuarioid", $usuario);
         $this->db->group_by(array("usuarios.usuarioId", "libros.libroId"));
         return $this->db->get();
     }

     public function addCompra($usuarioId = "", $libroId = "", $cantidad = "") {
            date_default_timezone_set('America/Lima');
            $data = array(
                "usuarioId" => $usuarioId,
                "libroId" => $libroId,
                "cantidad" => $cantidad,
                "fecha" => date("Y-m-d H:i:s")
            );

            return $this->db->insert('libros_usuario', $data);
     }
 }
