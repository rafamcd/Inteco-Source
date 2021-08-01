<?php

class AreaRemota extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function verificaLogado($id_ts) {
        $logado = '';
        $sql = "SELECT distinct usr FROM ts WHERE id_usuario = '$id_ts'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0 ) {
            $sql = $sql->fetch();
            $logado = $sql['usr'];
        }
        return $logado;
    }
    
    public function removeTsVazio() {
        $this->db->query("DELETE FROM ts WHERE usr = ''");
    }
    
    public function removeTs($id_ts) {
        $sql = $this->db->prepare("DELETE FROM ts WHERE id_usuario = :id_ts");
        $sql->bindValue(":id_ts", $id_ts);
        $sql->execute();
    }
    public function insereTs($id_ts) {
        $id_cliente = 0;
        $sql = "SELECT distinct id_cliente FROM ts_user WHERE id = '$id_ts'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $id_cliente = $sql['id_cliente'];
        }
        $usr = $_SESSION['user'];
        $sql = $this->db->prepare("INSERT INTO ts SET id_usuario = :id_ts, id_cliente = :id_cliente, usr=:usr, dataehora=DATE_SUB(NOW(), INTERVAL 1 HOUR)");
        $sql->bindValue(":id_ts", $id_ts);
        $sql->bindValue(":id_cliente", $id_cliente);
        $sql->bindValue(":usr", $usr);
        $sql->execute();
    }
    
    public function getClientesUsuarios() {
        $this->db->query("DELETE FROM ts where DATE_FORMAT(dataehora,'%Y-%m-%d') < DATE_FORMAT(now(), '%Y-%m-%d')");
        $array = array();
        $sql = "SELECT distinct ts_user.*, (select nome from cliente where cliente.id = ts_user.id_cliente) as nome1, usr, dataehora, ".
                "(select nome from funcionario where id = (select id_funcionario from usuario where user = ts.usr)) as nome2 ".
                "FROM ts_user ".
                "LEFT JOIN ts on (ts_user.id_cliente = ts.id_cliente) and (ts_user.id = ts.id_usuario) ".
                "order by nome1, ts_user.usuario";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
    public function getAreaRemota($id_cliente) {
        $array = array();
        $sql = "SELECT * FROM ts_user WHERE id_cliente = '$id_cliente'";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function insere($id_cliente,$usuario) {
        $sql = $this->db->prepare("INSERT INTO ts_user SET id_cliente = :id_cliente, usuario = :usuario");
        $sql->bindValue(":id_cliente", $id_cliente);
        $sql->bindValue(":usuario", $usuario);
        $sql->execute();
    }
    public function delete($id_cliente) {
        $sql = $this->db->prepare("DELETE FROM ts_user WHERE id_cliente=:id_cliente");
        $sql->bindValue(":id_cliente", $id_cliente);
        $sql->execute();
    }
        
    
}

