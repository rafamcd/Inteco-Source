<?php

class Menu extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getMenus() {
            $array = array();
            
            $sql = "SELECT * FROM menu where tipo = 2 ORDER BY ordem";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
    public function getMenusSite() {
            $array = array();
            
            $sql = "SELECT * FROM menu where tipo = 1 ORDER BY ordem";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
        
    public function getProximaOrdemPainel() {
        $sql = "SELECT MAX(ordem)+1 as ordem from menu";
        $sql = $this->db->query($sql);
        $ordem = $sql->fetch();
        return $ordem['ordem'];
    }
    public function inserir($descricao, $tipo, $url, $class_bootstrap, $ordem) {
        $sql = $this->db->prepare("INSERT INTO menu SET descricao=:descricao, tipo = :tipo, url=:url, class_bootstrap=:class_bootstrap, ordem=:ordem");
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":url", $url);
        $sql->bindValue(":class_bootstrap", $class_bootstrap);
        $sql->bindValue(":ordem", $ordem);
        $sql->execute();
        $id = $this->db->lastInsertId();
        return $id;        
    }
    public function inserirSub($id, $sub, $subc) {
        $sql = $this->db->prepare("INSERT INTO sub_menu SET id_menu = :id, descricao=:sub, url = :subc");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":sub", $sub);
        $sql->bindValue(":subc", $subc);
        $sql->execute();
    }
    public function remover($id) {
        $sql = $this->db->prepare("DELETE FROM sub_menu where id_menu = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        $sql = $this->db->prepare("DELETE FROM menu where id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        $sql = $this->db->prepare("DELETE FROM permissao where id_menu = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function removerMenuSite($id) {
        $sql = $this->db->prepare("DELETE FROM sub_menu where id_menu = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        $sql = $this->db->prepare("DELETE FROM menu where id = :id");        
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
}

