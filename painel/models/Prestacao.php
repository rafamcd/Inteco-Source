<?php

class Prestacao extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inserirPrestacao($id_viagem, $valor_adiantamento) {
        $sql = $this->db->prepare("INSERT INTO func_viagens_prestacao SET id_viagem=:id_viagem, valor_adiantamento = :valor_adiantamento");
        $sql->bindValue(":id_viagem", $id_viagem);
        $sql->bindValue(":valor_adiantamento", $valor_adiantamento);
        $sql->execute();
        return $this->db->lastInsertId();
    }
    public function inserirPrestacaoVinculo($id_viagem, $vinculo_outra_prestacao) {
        $sql = $this->db->prepare("INSERT INTO func_viagens_prestacao SET id_viagem=:id_viagem, vinculo_outra_prestacao = :vinculo_outra_prestacao");
        $sql->bindValue(":id_viagem", $id_viagem);
        $sql->bindValue(":vinculo_outra_prestacao", $vinculo_outra_prestacao);
        $sql->execute();        
    }
    public function inserirPrestacaoItens($id_prestacao, $data, $valor, $descricao, $empresa) {
        $sql = $this->db->prepare("INSERT INTO func_viagens_prestacao_itens SET id_prestacao=:id_prestacao, data=:data, valor=:valor, descricao=:descricao, empresa=:empresa");
        $sql->bindValue(":id_prestacao", $id_prestacao);
        $sql->bindValue(":data", $data);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":empresa", $empresa);
        $sql->execute();
    }
    public function deletaPrestacao($id_prestacao) {
        $sql = $this->db->prepare("DELETE FROM func_viagens_prestacao_itens WHERE id_prestacao =:id_prestacao");
        $sql->bindValue(":id_prestacao", $id_prestacao);
        $sql->execute();
        $sql = $this->db->prepare("DELETE FROM func_viagens_prestacao WHERE id =:id_prestacao");
        $sql->bindValue(":id_prestacao", $id_prestacao);
        $sql->execute();
    }
    public function getIdPrestacao($id) {
        $id_prestacao=0;
        $sql = $this->db->query("SELECT distinct id FROM func_viagens_prestacao WHERE id_viagem = '$id'");        
        if ($sql->rowCount() > 0) {
            
            $sql2 = $sql->fetch();
            $id_prestacao = $sql2['id'];
        }
        
        return $id_prestacao;
    }
    public function getNomeClientesVinculados($id) { 
        $array = array();
        $nomes='';
        $sql = $this->db->query("SELECT DISTINCT replace(cliente.nome,'Municipal','') as nome FROM func_viagens "
                . "LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                . "LEFT JOIN func_viagens_prestacao ON func_viagens.id = func_viagens_prestacao.id_viagem "
                . "WHERE vinculo_outra_prestacao = '$id'");
        if ($sql->rowCount() > 0) {
           if ($sql->rowCount() < 2) { 
               $array = $sql->fetch();
               $nomes=' <br/> '.$array['nome'];
           }  else { 
               $array = $sql->fetchAll();              
               foreach($array as $arra) {
                   $nomes = $nomes.' <br/> '.$arra['nome'];
               }
               
           }
        }
        return $nomes;
    }
    
    public function getPrestacao($id_prestacao) {
        $array = array();
        
        $sql = $this->db->query("SELECT a.valor_adiantamento, a.vinculo_outra_prestacao, b.* FROM func_viagens_prestacao a LEFT JOIN func_viagens_prestacao_itens b ON a.id = b.id_prestacao WHERE a.id='$id_prestacao'");
        if ($sql->rowCount() > 0) {            
            if ($sql->rowCount() < 2) {
                $array = $sql->fetch();
            } else {
                $array = $sql->fetchAll();
            }            
        }
        return $array;
    }
}

