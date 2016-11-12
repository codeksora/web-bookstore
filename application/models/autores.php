<?php

 class Autores extends CI_Model {

     public function findAll() {
         return $this->db->get('autores');
     }

     public function addAutor($autor = "") {
         $data = array(
             "nombre" => $autor
         );
         return $this->db->insert('autores', $data);
     }
 }
