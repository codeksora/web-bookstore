<?php

 class Categorias extends CI_Model {

     public function findAll() {
         return $this->db->get('categorias');
     }
 }
