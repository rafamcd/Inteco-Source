<?php

class ClienteSite extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    public function getClientesTodosSite() {
        $array = array();
        $sql = "SELECT id, nomeabr, fone, cpf_cnpj, endereco_rua, endereco_bairro, endereco_cep, email, imagem, site, site_portal, site_einf, tipo FROM cliente ORDER BY tipo";
        $sql = $this->db->query($sql);
                
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;        
    }
    
}

