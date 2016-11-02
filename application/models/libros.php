<?php

 class Libros extends CI_Model {

     public function findAll() {
         return $this->db->get('libros');
     }

     public function findByRewrite($rewrite = "") {
         $result = $this->db->get_where('libros', array('rewrite' => $rewrite),1);
         return $result->row();
     }
 }
