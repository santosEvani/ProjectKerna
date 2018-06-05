<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class InsertDAO extends CI_Model {
    // VAI INSERIR UM REGISTRO AO BANCO
    
    //ESSE $obj REPRESENTARÁ CLASSES QUE POSSUAM OS METODOS
    // toArray() e getClassName() => DUCK TYPING
    public function insertObject($obj){
        $this->db->insert($obj->getClassName(), $obj->toArray());
    }    
}