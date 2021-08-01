<?php

class Viagem extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getTotalViagens($id_funcionario, $nomeuser, $filtros) {
        
        $total = 0;        
        $filtroString = '1=1';
        $filtroString2 = ' and 1=1';
        
        if (!empty($filtros['data1']) && !empty($filtros['data2'])) {
            $data1 = $filtros['data1'];
            $data2 = $filtros['data2'];
            $filtroString = "data between '$data1' and '$data2'";  
            
            if (!empty($filtros['fun'])) {
                if ($filtros['fun'] > 0) {                    
                    $func = $filtros['fun'];                                        
                    $filtroString2 = " and id_funcionario = '$func'";                                        
                } 
            }   
            
            if ($nomeuser == 'roseli' or $nomeuser == 'rubens') {
                if ($filtros['fun'] == 0) {
                    $filtroString2 = " and 1=1 ";
                 }
            }
        }
        
        if ($nomeuser != 'roseli' and $nomeuser != 'rubens') {
            $sql = "SELECT COUNT(*) as c FROM func_viagens WHERE $filtroString and id_funcionario=:id_funcionario";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id_funcionario", $id_funcionario);
            $sql->execute();
            $sql = $sql->fetch();
            $total = $sql['c'];
        } else {
            $sql = "SELECT COUNT(*) as c FROM func_viagens WHERE $filtroString $filtroString2";
            
            
            $sql = $this->db->query($sql);
            $sql = $sql->fetch();
            $total = $sql['c'];
        } 
        
        return $total;
    }
    
    public function inserir($id_funcionario, $id_cliente, $solicitante, $anotacao, $data, $datasaida, $horachegada, $horasaida) {
        
        $sql = $this->db->prepare("INSERT INTO func_viagens SET id_funcionario=:id_funcionario, anotacao = :anotacao, id_cliente=:id_cliente, solicitante=:solicitante, data=:data, data_saida=:datasaida, hora_chegada=:horachegada, hora_saida=:horasaida");
        $sql->bindValue(":id_funcionario", $id_funcionario);
        $sql->bindValue(":anotacao", $anotacao);
        $sql->bindValue(":id_cliente", $id_cliente);
        $sql->bindValue(":solicitante", $solicitante);
        $sql->bindValue(":data", $data);
        $sql->bindValue(":datasaida", $datasaida);
        $sql->bindValue(":horachegada", $horachegada);
        $sql->bindValue(":horasaida", $horasaida);
        $sql->execute();
    }
    
    public function editar($id, $id_funcionario, $id_cliente, $solicitante, $anotacao, $data, $datasaida, $horachegada, $horasaida) {
        $sql = $this->db->prepare("UPDATE func_viagens SET id_funcionario=:id_funcionario, anotacao = :anotacao, id_cliente=:id_cliente, solicitante=:solicitante, data=:data, data_saida=:datasaida, hora_chegada=:horachegada, hora_saida=:horasaida WHERE id=:id");
        $sql->bindValue(":id_funcionario", $id_funcionario);
        $sql->bindValue(":anotacao", $anotacao);
        $sql->bindValue(":id_cliente", $id_cliente);
        $sql->bindValue(":solicitante", $solicitante);
        $sql->bindValue(":data", $data);
        $sql->bindValue(":datasaida", $datasaida);
        $sql->bindValue(":horachegada", $horachegada);
        $sql->bindValue(":horasaida", $horasaida);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function excluirViagem($id) {
        $sql = $this->db->prepare("DELETE FROM func_viagens WHERE id=:id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function getViagens($p, $qtd_por_pagina, $id_funcionario, $nomeuser, $filtros) {
		$array = array();                
                
                $offset = ($p - 1) * $qtd_por_pagina;
                
                $filtroString = '1=1';   
                $filtroString2 = ' and 1=1';
        
                if (!empty($filtros['data1']) && !empty($filtros['data2'])) {
                    $data1 = $filtros['data1'];
                    $data2 = $filtros['data2'];
                    $filtroString = "func_viagens.data between '$data1' and '$data2'";    

                    if (!empty($filtros['fun'])) {
                        if ($filtros['fun'] > 0) {                    
                            $func = $filtros['fun'];                                        
                            $filtroString2 = " and func_viagens.id_funcionario = '$func'";                    
                        } 
                    }
                    
                     if ($nomeuser == 'roseli' or $nomeuser == 'rubens') {
                        if ($filtros['fun'] == 0) {
                            $filtroString2 = " and 1=1 ";
                        }
                     }
                }
                
                if ($nomeuser != 'roseli' and $nomeuser != 'rubens') {
                    $sql = "SELECT func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome "
                            . "FROM func_viagens LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                            . "WHERE $filtroString and id_funcionario = '$id_funcionario' ORDER BY ID DESC LIMIT $offset, $qtd_por_pagina";
                } else {
                    $sql = "SELECT func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome, func_viagens_prestacao.valor_adiantamento, sum(valor) as valor_despesa"
                            . " FROM func_viagens LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                            . " LEFT JOIN func_viagens_prestacao on func_viagens.id = func_viagens_prestacao.id_viagem "
                            . " LEFT JOIN func_viagens_prestacao_itens ON func_viagens_prestacao.id = func_viagens_prestacao_itens.id_prestacao "
                            . "WHERE $filtroString $filtroString2 "
                            . " group by func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome, func_viagens_prestacao.valor_adiantamento ORDER BY func_viagens.id DESC LIMIT $offset, $qtd_por_pagina";                            
                    }
                 
		
                $sql = $this->db->query($sql);
                
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
        
        public function getViagensAdiantamento($id_funcionario, $nomeuser, $filtros) {
		$array = array();                
                
                
                $filtroString = '1=1';   
                $filtroString2 = ' and 1=1';
        
                if (!empty($filtros['data1']) && !empty($filtros['data2'])) {
                    $data1 = $filtros['data1'];
                    $data2 = $filtros['data2'];
                    $filtroString = "func_viagens.data between '$data1' and '$data2'";    

                    if (!empty($filtros['fun'])) {
                        if ($filtros['fun'] > 0) {                    
                            $func = $filtros['fun'];                                        
                            $filtroString2 = " and func_viagens.id_funcionario = '$func'";                    
                        } 
                    }
                    
                     if ($nomeuser == 'roseli' or $nomeuser == 'rubens') {
                        if ($filtros['fun'] == 0) {
                            $filtroString2 = " and 1=1 ";
                        }
                     }
                }
                
                if ($nomeuser != 'roseli' and $nomeuser != 'rubens') {
                    $sql = "SELECT func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome "
                            . "FROM func_viagens LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                            . "WHERE $filtroString and id_funcionario = '$id_funcionario' ORDER BY ID DESC LIMIT $offset, $qtd_por_pagina";
                } else {
                    $sql = "SELECT func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome, func_viagens_prestacao.valor_adiantamento, sum(valor) as valor_despesa"
                            . " FROM func_viagens LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                            . " LEFT JOIN func_viagens_prestacao on func_viagens.id = func_viagens_prestacao.id_viagem "
                            . " LEFT JOIN func_viagens_prestacao_itens ON func_viagens_prestacao.id = func_viagens_prestacao_itens.id_prestacao "
                            . "WHERE $filtroString $filtroString2 "
                            . " group by func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome, func_viagens_prestacao.valor_adiantamento ORDER BY func_viagens.id DESC";                            
                    }
                 
		
                $sql = $this->db->query($sql);
                
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
        
        public function getViagensDespesa($id_funcionario, $nomeuser, $filtros) {
		$array = array();                
                
                $filtroString = '1=1';   
                $filtroString2 = ' and 1=1';
        
                if (!empty($filtros['data1']) && !empty($filtros['data2'])) {
                    $data1 = $filtros['data1'];
                    $data2 = $filtros['data2'];
                    $filtroString = "func_viagens.data between '$data1' and '$data2'";    

                    if (!empty($filtros['fun'])) {
                        if ($filtros['fun'] > 0) {                    
                            $func = $filtros['fun'];                                        
                            $filtroString2 = " and func_viagens.id_funcionario = '$func'";                    
                        } 
                    }
                    
                     if ($nomeuser == 'roseli' or $nomeuser == 'rubens') {
                        if ($filtros['fun'] == 0) {
                            $filtroString2 = " and 1=1 ";
                        }
                     }
                }
                
                if ($nomeuser != 'roseli' and $nomeuser != 'rubens') {
                    $sql = "SELECT func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome "
                            . "FROM func_viagens LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                            . "WHERE $filtroString and id_funcionario = '$id_funcionario' ORDER BY ID DESC LIMIT $offset, $qtd_por_pagina";
                } else {
                    $sql = "SELECT func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome, func_viagens_prestacao.valor_adiantamento, sum(valor) as valor_despesa"
                            . " FROM func_viagens LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                            . " LEFT JOIN func_viagens_prestacao on func_viagens.id = func_viagens_prestacao.id_viagem "
                            . " LEFT JOIN func_viagens_prestacao_itens ON func_viagens_prestacao.id = func_viagens_prestacao_itens.id_prestacao "
                            . "WHERE $filtroString $filtroString2 "
                            . " group by func_viagens.id, func_viagens.id_funcionario, func_viagens.id_cliente, func_viagens.solicitante, func_viagens.anotacao, func_viagens.data, func_viagens.data_saida, func_viagens.hora_chegada, func_viagens.hora_saida, cliente.nome, func_viagens_prestacao.valor_adiantamento ORDER BY func_viagens.id DESC";                            
                    }
                 
		
                $sql = $this->db->query($sql);
                
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetchAll();
                }

		return $array;
	}
    public function getViagem($id) {
        $array = array();                
                
        	$sql = "SELECT func_viagens.*, "
                        . "replace(cliente.nome,'Municipal','') as nome, "
                        . "funcionario.nome as nomefunc, funcionario.fone, funcionario.skype FROM func_viagens "
                        . "LEFT JOIN cliente ON func_viagens.id_cliente = cliente.id "
                        . "LEFT JOIN funcionario ON func_viagens.id_funcionario = funcionario.id "
                        . "WHERE func_viagens.id = '$id'";
                $sql = $this->db->query($sql);
                
                if ($sql->rowCount() > 0) {
                    $array = $sql->fetch();
                }

	return $array;
    }
}

