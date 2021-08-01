<?php

class Anotacao extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getTotalAnotacoes($id_funcionario) {
        $total = 0;
        $sql = "SELECT COUNT(*) as c FROM func_anotacoes WHERE id_funcionario='$id_funcionario'";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();
        $total = $sql['c'];
        return $total;
    }
    
    public function inserir($id_funcionario, $anotacao) {
        $sql = $this->db->prepare("INSERT INTO func_anotacoes SET id_funcionario=:id_funcionario, anotacao = :anotacao , data=NOW()");
        $sql->bindValue(":id_funcionario", $id_funcionario);
        $sql->bindValue(":anotacao", $anotacao);
        $sql->execute();
    }
    public function excluirNote($id) {
        $sql = $this->db->prepare("DELETE FROM func_anotacoes WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function getAnotacoes($p, $qtd_por_pagina, $id_funcionario) {
		$array = array();                
                
                $offset = ($p - 1) * $qtd_por_pagina;

		$sql = "SELECT * FROM func_anotacoes WHERE id_funcionario = '$id_funcionario' ORDER BY ID DESC LIMIT $offset, $qtd_por_pagina";
                $sql = $this->db->query($sql);
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
}

