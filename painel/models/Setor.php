<?php

class Setor extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getSetores() {
        $array = array();
        $sql = "SELECT * FROM setor ORDER BY id";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }   
}

