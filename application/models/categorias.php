<?php

 class Categorias extends CI_Model {

     public function findAll() {
         return $this->db->get('categorias');
     }

     public function addCategoria($categoria = "", $url = "") {
         $data = array(
             "descripcion" => $categoria,
             "rewrite" => $url
         );
         return $this->db->insert('categorias', $data);
     }
 }
