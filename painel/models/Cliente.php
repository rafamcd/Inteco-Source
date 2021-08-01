<?php

class Cliente extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCliente($id) {
        $array = array();
        
        $sql = "SELECT * FROM cliente WHERE id='$id'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    
    public function getClientes($offset, $limit) {
            $array = array();
            
            $sql = "SELECT * FROM cliente order by nome LIMIT $offset, $limit";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
    
    public function inserir($id, $nome, $telefone, $cnpj, $endereco_rua, $endereco_bairro, $endereco_cep, $email, $site, $site_portal, $site_einf, $tipo, $md5imagem) {
        
        $sql = "INSERT INTO cliente SET id=:id, nome=:nome, fone=:telefone, cpf_cnpj=:cnpj, endereco_rua = :endereco_rua, endereco_bairro = :endereco_bairro, endereco_cep = :endereco_cep, email=:email, site=:site, site_portal = :site_portal, site_einf = :site_einf, tipo=:tipo, imagem=:md5imagem";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":cnpj", $cnpj);
        $sql->bindValue(":endereco_rua", $endereco_rua);
        $sql->bindValue(":endereco_bairro", $endereco_bairro);
        $sql->bindValue(":endereco_cep", $endereco_cep);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":site", $site);
        $sql->bindValue(":site_portal", $site_portal);
        $sql->bindValue(":site_einf", $site_einf);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":md5imagem", $md5imagem);
        $sql->execute();        
    }
    
    public function remover($id) {
        $sql = "SELECT imagem FROM cliente WHERE id='$id'";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $img = $sql->fetch();
            $img = $img['imagem'];            
        }                
        $sql = $this->db->prepare("DELETE FROM cliente WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    public function getTotalClientesFiltro($filtros) {
		$filtroString = array('1=1');                

		if ($filtros['tipo'] >= '0') {
                    $tipo = $filtros['tipo'];
                    $filtroString[] = "cliente.tipo = '$tipo'";
		}

		$sql = "SELECT COUNT(*) as c FROM cliente WHERE ".implode(' AND ',$filtroString);
                $sql = $this->db->query($sql);
                
                $row = $sql->fetch();

		return $row['c'];
	}
        
        public function getTotalClientesLicFiltro($filtros) {
		$filtroString = array('1=1');                

		if ($filtros['tipo'] >= '0') {
                    $tipo = $filtros['tipo'];
                    $filtroString[] = "cliente.tipo = '$tipo'";
		}

		$sql = "SELECT COUNT(*) as c FROM cliente WHERE lic IS NOT NULL and ".implode(' AND ',$filtroString);
                $sql = $this->db->query($sql);
                
                $row = $sql->fetch();

		return $row['c'];
	}
    
    public function getClientesFiltro($p, $qtd_por_pagina, $filtros) {
		$array = array();
                $filtroString = array('1=1');                

		if (!empty($filtros['tipo'])) {
                    $tipo = $filtros['tipo'];
                    if ($tipo == '4') {
                        $tipo = '0';
                    }
			$filtroString[] = "cliente.tipo = '$tipo'";                        
		}
                
                
                
                $offset = ($p - 1) * $qtd_por_pagina;

		$sql = "SELECT * FROM cliente WHERE ".implode(' AND ',$filtroString)." ORDER BY nome LIMIT $offset, $qtd_por_pagina";
                $sql = $this->db->query($sql);
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
        public function getClientesLicFiltro($p, $qtd_por_pagina, $filtros) {
		$array = array();
                $filtroString = array('1=1');                

		if (!empty($filtros['tipo'])) {
                    $tipo = $filtros['tipo'];
                    if ($tipo == '4') {
                        $tipo = '0';
                    }
			$filtroString[] = "cliente.tipo = '$tipo'";                        
		}
                
                
                
                $offset = ($p - 1) * $qtd_por_pagina;

		$sql = "SELECT * FROM cliente WHERE lic IS NOT NULL and ".implode(' AND ',$filtroString)." ORDER BY nome LIMIT $offset, $qtd_por_pagina";
                $sql = $this->db->query($sql);
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
    public function updateCliente($id, $nome, $telefone, $cnpj, $endereco_rua, $endereco_bairro, $endereco_cep, $email, $site, $site_portal, $site_einf, $tipo) {
        
        $sql = "UPDATE cliente SET nome=:nome, fone=:telefone, cpf_cnpj=:cnpj, endereco_rua=:endereco_rua, endereco_bairro=:endereco_bairro, endereco_cep=:endereco_cep, email=:email, site=:site, site_portal = :site_portal, site_einf = :site_einf, tipo=:tipo WHERE id=:id";
        $sql = $this->db->prepare($sql);        
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":cnpj", $cnpj);
        $sql->bindValue(":endereco_rua", $endereco_rua);
        $sql->bindValue(":endereco_bairro", $endereco_bairro);
        $sql->bindValue(":endereco_cep", $endereco_cep);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":site", $site);
        $sql->bindValue(":site_portal", $site_portal);
        $sql->bindValue(":site_einf", $site_einf);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
    }
    
    public function updateImagemCliente($id, $imagem) {
        $sql = $this->db->prepare("UPDATE cliente SET imagem=:imagem WHERE id=:id");
        $sql->bindValue(":imagem", $imagem);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    public function apagaImagemAnterior($id) {        
        $array = array();
        $sql = "SELECT imagem FROM cliente WHERE id='$id' and imagem != 'noimage.jpg'";
        $img = '';
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
            $img = $array['imagem'];
            $endereco = 'assets/images/clientes/'.$img;
            unlink($endereco);
        }
    }
    public function apagaLicAnterior($id) {        
        if ($_SESSION['user'] == 'roseli' or $_SESSION['user'] == 'rubens' or $_SESSION['user'] == 'rafamcd') {
        $array = array();
        $sql = "SELECT lic FROM cliente WHERE id='$id' and lic IS NOT NULL";
        $lic = '';
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
            $lic = $array['lic'];
            $endereco = 'assets/lics/'.$lic;
            unlink($endereco);
        }
        $myfile = fopen("log_lic.txt", "a");
        fwrite($myfile, 'Arquivo de Licenca de Uso apagada, ID: '.$id.' - IP: '.$_SERVER['REMOTE_ADDR'].' - Data e Hora: '.date('d/m/Y H:i:s')."\r\n");
        fclose($myfile);        
        } 
    }
    public function getClientesTodos() {
        $array = array();
        $sql = "SELECT * FROM cliente ORDER BY nome";
        $sql = $this->db->query($sql);
                
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;        
    }
   
    public function inserirLic($id, $lic) {
        $sql = $this->db->prepare("UPDATE cliente SET lic = :lic WHERE id=:id");
        $sql->bindValue(":lic", $lic);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    public function removerLic($id) {
        if ($_SESSION['user'] == 'roseli' or $_SESSION['user'] == 'rubens' or $_SESSION['user'] == 'rafamcd') {
        $sql = $this->db->prepare("UPDATE cliente SET lic = null WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        $myfile = fopen("log_lic.txt", "a");
        fwrite($myfile, 'Registro no banco de Licenca de Uso apagada, ID: '.$id.' - IP: '.$_SERVER['REMOTE_ADDR'].' - Data e Hora: '.date('d/m/Y H:i:s')."\r\n");
        fclose($myfile);   
        }
    }
    
    public function getSenhasCli($id_cliente) {
        $array = array();
        $sql = "SELECT * FROM cliente_sistema_senha where id_cliente = '$id_cliente' order by nome_sistema";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function getClientesSemSenha() {
        $array = array();
        $sql = "select id, nome from cliente where id not in (select id_cliente from cliente_sistema_senha)";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function getClientesVencimento() {
        $array = array();
        $sql = "SELECT distinct cliente.id, cliente.nome, cliente_sistema_senha.final_acesso FROM cliente_sistema_senha LEFT JOIN cliente on cliente_sistema_senha.id_cliente = cliente.id order by nome";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
}

