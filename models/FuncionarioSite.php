<?php

class FuncionarioSite extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function getFuncionariosTodos() {
        $array = array();
        $sql = "SELECT funcionario.*, setor.id, setor.descricao FROM funcionario LEFT JOIN setor on funcionario.setor_id = setor.id ORDER BY setor.id, nome";
        $sql = $this->db->query($sql);
                
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;        
    }
    
    
}

