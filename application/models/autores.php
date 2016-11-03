<?php

 class Autores extends CI_Model {

     public function findAll() {
         return $this->db->get('autores');
     }
 }
