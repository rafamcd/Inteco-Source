<?php

class Funcionario extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getFuncionario($id) {
        $array = array();
        
        $sql = "SELECT * FROM funcionario WHERE id='$id'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    
    public function getFuncionarios($offset, $limit) {
            $array = array();
            
            $sql = "SELECT * FROM funcionario order by nome LIMIT $offset, $limit";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
    
    public function inserir($nome, $skype, $data_nascimento, $fone, $cpf, $email, $md5imagem, $endereco_rua, $endereco_bairro, $endereco_cep, $setor) {
        $sql = "INSERT INTO funcionario SET nome=:nome, skype=:skype, data_nascimento=:data_nascimento, fone = :fone, cpf = :cpf, email=:email, imagem=:md5imagem, endereco_rua = :endereco_rua, endereco_bairro = :endereco_bairro, endereco_cep = :endereco_cep, setor_id=:setor";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":skype", $skype);
        $sql->bindValue(":data_nascimento", $data_nascimento);
        $sql->bindValue(":fone", $fone);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":md5imagem", $md5imagem);
        $sql->bindValue(":endereco_rua", $endereco_rua);
        $sql->bindValue(":endereco_bairro", $endereco_bairro);
        $sql->bindValue(":endereco_cep", $endereco_cep);
        $sql->bindValue(":setor", $setor);
        $sql->execute();
    }
    
    public function remover($id) {                 
        $sql = $this->db->prepare("DELETE FROM funcionario WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    public function getTotalFuncionariosFiltro($filtros) {
		$filtroString = array('1=1');                

		if ($filtros['setor'] >= '0') {
                    $setor = $filtros['setor'];
                    $filtroString[] = "funcionario.setor_id = '$setor'";
		}

		$sql = "SELECT COUNT(*) as c FROM funcionario WHERE ".implode(' AND ',$filtroString);
                $sql = $this->db->query($sql);
                
                $row = $sql->fetch();

		return $row['c'];
	}
    
    public function getFuncionariosFiltro($p, $qtd_por_pagina, $filtros) {
		$array = array();
                $filtroString = array('1=1');                

		if (!empty($filtros['setor'])) {
                    $setor = $filtros['setor'];                    
                    $filtroString[] = "funcionario.setor_id = '$setor'";                        
		}
                
                $offset = ($p - 1) * $qtd_por_pagina;

		$sql = "SELECT * FROM funcionario WHERE ".implode(' AND ',$filtroString)." ORDER BY nome LIMIT $offset, $qtd_por_pagina";
                $sql = $this->db->query($sql);
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
    public function updateFuncionario($id, $nome, $skype, $data_nascimento, $fone, $cpf, $email, $endereco_rua, $endereco_bairro, $endereco_cep, $setor) {
        $sql = "UPDATE funcionario SET nome=:nome, skype=:skype, data_nascimento=:data_nascimento, fone=:fone, cpf=:cpf, email=:email, endereco_rua=:endereco_rua, endereco_bairro=:endereco_bairro, endereco_cep=:endereco_cep, setor_id=:setor WHERE id=:id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":skype", $skype);
        $sql->bindValue(":data_nascimento", $data_nascimento);
        $sql->bindValue(":fone", $fone);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":endereco_rua", $endereco_rua);
        $sql->bindValue(":endereco_bairro", $endereco_bairro);
        $sql->bindValue(":endereco_cep", $endereco_cep);
        $sql->bindValue(":setor", $setor);
        $sql->bindValue(":id", $id);
        $sql->execute();        
    }
    
    public function updateImagemFuncionario($id, $imagem) {
        $sql = "UPDATE funcionario SET imagem=:imagem WHERE id=:id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":imagem", $imagem);
        $sql->bindValue(":id", $id);
        $sql->execute(); 
    }
    
    public function apagaImagemAnterior($id) {        
        $array = array();
        $sql = "SELECT imagem FROM funcionario WHERE id='$id' and imagem != 'noimage.jpg'";
        $img = '';
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            
            $array = $sql->fetch();            
            $img = $array['imagem'];
            $endereco = 'assets/images/funcionarios/'.$img;
            unlink($endereco);
        }
    }
    public function getFuncionariosTodos() {
        $array = array();
        $sql = "SELECT * FROM funcionario ORDER BY nome";
        $sql = $this->db->query($sql);
                
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;        
    }
    
    public function getFuncionariosTodos2() {
        $array = array();
        $sql = "SELECT * FROM funcionario where id not in (1,2,8) ORDER BY nome";
        $sql = $this->db->query($sql);
                
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;        
    }
    
    
}

