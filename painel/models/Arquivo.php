<?php

class Arquivo extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getTotalArquivos($id_funcionario) {
        $total = 0;
        $sql = "SELECT COUNT(*) as c FROM func_arquivos WHERE id_funcionario='$id_funcionario'";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();
        $total = $sql['c'];
        return $total;
    }
    
    public function inserir($id_funcionario, $arquivo, $titulo) {
        $sql = $this->db->prepare("INSERT INTO func_arquivos SET id_funcionario=:id_funcionario, arquivo = :arquivo , data=NOW(), titulo = :titulo");
        $sql->bindValue(":id_funcionario", $id_funcionario);
        $sql->bindValue(":arquivo", $arquivo);
        $sql->bindValue(":titulo", $titulo);
        $sql->execute();
    }
    public function excluirArq($id, $id_funcionario) {
        $array = array();
        $sql = "SELECT arquivo FROM func_arquivos WHERE id='$id'";
        $arq = '';
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            
            $array = $sql->fetch();            
            $arq = $array['arquivo'];
            $endereco = 'assets/arq-func/'.$id_funcionario.'/'.$arq;
            unlink($endereco);
        }
        
        $sql = $this->db->prepare("DELETE FROM func_arquivos WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function getArquivos($p, $qtd_por_pagina, $id_funcionario) {
		$array = array();                
                
                $offset = ($p - 1) * $qtd_por_pagina;

		$sql = "SELECT * FROM func_arquivos WHERE id_funcionario = '$id_funcionario' ORDER BY ID DESC LIMIT $offset, $qtd_por_pagina";
                $sql = $this->db->query($sql);
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
}

