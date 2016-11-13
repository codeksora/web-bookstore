<?php

 class Libros extends CI_Model {

     public function findAll() {
         $this->db->from('libros');
         $this->db->order_by("libroId", "desc");
         return $this->db->get();
     }

     public function findByRewrite($rewrite = "") {
         $result = $this->db->get_where('libros', array('rewrite' => $rewrite),1);
         return $result->row();
     }

     public function findByLimit($limit = "") {
         $this->db->order_by("libroId", "desc");
         return $this->db->get('libros', $limit);
     }

     public function findByCategoria() {
         $this->db->order_by("libroId", "desc");
         return $this->db->get('libros');
     }

     public function findById($id = "") {
         $result = $this->db->get_where('libros', array('libroId' => $id), 1);
         return $result->row();

     }

     public function addLibro($titulo = "", $url = "", $precio = "", $descripcion = "", $imagen = "", $categoria = "", $autor = "") {
         $data = array(
             "titulo" => $titulo,
             "rewrite" => $url,
             "precioNuevo" => $precio,
             "descripcion" => $descripcion,
             "imagen" => $imagen,
             "categoriaId" => $categoria,
             "autorId" => $autor
         );

         return $this->db->insert('libros', $data);
     }
 }
