<?php
class viagemController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();        
        $u = new Usuario();
        $v = new Viagem();        
        $c = new Cliente();
        $f = new Funcionario();
        
        
        $clientes = $c->getClientesTodos();
        $funcionarios = $f->getFuncionariosTodos2();
        
        $id_funcionario = 0;
        
        $id_funcionario = $u->getFuncionarioId($_SESSION['lginteco']);
        $nomeuser = $_SESSION['user'];
        
        if ($nomeuser != 'roseli' and $nomeuser != 'rubens') {
            $filtros = array (
            'data1' => '',
            'data2' => ''            
            );  
        } else {
            $filtros = array (
            'data1' => '',
            'data2' => '',
            'fun' => ''
            );  
        }
        
        
        if (isset($_GET['filtros'])) {
		$filtros = $_GET['filtros'];                
	}
        
        
        $total_viagens = $v->getTotalViagens($id_funcionario, $nomeuser, $filtros);
        
        $p = 1;	

	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$qtd_por_pagina = 5;
	$total_paginas = ceil($total_viagens / $qtd_por_pagina);

	$viagens = $v->getViagens($p, $qtd_por_pagina, $id_funcionario, $nomeuser, $filtros);       
        
        
        if (isset($_POST['anotacao']) && !empty($_POST['anotacao'])) {
            
            //inserir filtros aqui
            header("Location: /novo/painel/viagem");
            
        }
        $dados['clientes'] = $clientes;
        $dados['funcionarios'] = $funcionarios;
        $dados['viagens'] = $viagens;
        
        if ($nomeuser == 'roseli' or $nomeuser == 'rubens') {
            $viagens_adiantamento = $v->getViagensAdiantamento($id_funcionario, $nomeuser, $filtros);
            $viagens_despesa = $v->getViagensDespesa($id_funcionario, $nomeuser, $filtros);
            $dados['adiantamentos'] = $viagens_adiantamento;
            $dados['despesas'] = $viagens_despesa;
        }
        
        $dados['total_paginas'] = $total_paginas;
        $dados['nomeuser'] = $nomeuser;
        $dados['p'] = $p;

        $this->loadTemplate('viagem', $dados);
    }
    
    public function add() {
        $dados = array();        
        $u = new Usuario();
        $v = new Viagem();        
        $c = new Cliente();
        
        $clientes = $c->getClientesTodos();        
        
        $id_funcionario = 0;
        $id_funcionario = $u->getFuncionarioId($_SESSION['lginteco']);  
        
        
        if (isset($_POST['anotacao']) && !empty($_POST['anotacao'])) {
            
            $id_cliente = addslashes($_POST['cli']);
            $solicitante = addslashes(utf8_decode($_POST['solicitante']));
            $anotacao = addslashes(utf8_decode($_POST['anotacao']));
            $data = addslashes($_POST['data']);
            $datasaida = addslashes($_POST['datasaida']);
            $horachegada = addslashes($_POST['horachegada']);
            $horasaida = addslashes($_POST['horasaida']);
            $v->inserir($id_funcionario, $id_cliente, $solicitante, $anotacao, $data, $datasaida, $horachegada, $horasaida);
            header("Location: /novo/painel/viagem");
            
        }
        
        $dados['clientes'] = $clientes;
        
        $this->loadTemplate('viagem_add', $dados);
    }
    
    public function editar($id) {
        $dados = array();        
        $u = new Usuario();
        $v = new Viagem();        
        $c = new Cliente();
        
        $clientes = $c->getClientesTodos();        
        
        $id_funcionario = 0;
        $id_funcionario = $u->getFuncionarioId($_SESSION['lginteco']); 
        
        $dadosViagem = $v->getViagem($id);
        
        
        if (isset($_POST['anotacao']) && !empty($_POST['anotacao'])) {
            
            $id_cliente = addslashes($_POST['cli']);
            $solicitante = addslashes(utf8_decode($_POST['solicitante']));
            $anotacao = addslashes(utf8_decode($_POST['anotacao']));
            $data = addslashes($_POST['data']);
            $datasaida = addslashes($_POST['datasaida']);
            $horachegada = addslashes($_POST['horachegada']);
            $horasaida = addslashes($_POST['horasaida']);
            $v->editar($id, $id_funcionario, $id_cliente, $solicitante, $anotacao, $data, $datasaida, $horachegada, $horasaida);
            header("Location: /novo/painel/viagem");
            
        }
        
        $dados['clientes'] = $clientes;
        $dados['dadosviagem'] = $dadosViagem;
        
        $this->loadTemplate('viagem_edit', $dados);
    }
    
    public function prestacao($id) {
        $dados = array();        
        $u = new Usuario();
        $v = new Viagem();    
        $p = new Prestacao();
        
        $id_funcionario = 0;
        $id_funcionario = $u->getFuncionarioId($_SESSION['lginteco']); 
        
        $dadosViagem = $v->getViagem($id);
        $id_prestacao = $p->getIdPrestacao($id);
        $dadosprestacao = $p->getPrestacao($id_prestacao);
        
        
        
        if (isset($_POST['descricao']) && !empty($_POST['descricao'])) {
            
            $id_viagem = $id;
            $valor_adiantamento = addslashes($_POST['valor_adiantamento']);
            $valor_adiantamento = str_replace(',','.', $valor_adiantamento);
            
            $p->deletaPrestacao($id_prestacao);
            
            $id_prestacao = $p->inserirPrestacao($id_viagem, $valor_adiantamento);
            if (isset($_POST['valor']) && !empty($_POST['valor'])) {
                $data = addslashes($_POST['data']);
                $valor = addslashes($_POST['valor']);
                $valor = str_replace(',','.', $valor);                
                $descricao = addslashes(utf8_decode($_POST['descricao']));
                $empresa = addslashes(utf8_decode($_POST['empresa']));
                $p->inserirPrestacaoItens($id_prestacao, $data, $valor, $descricao, $empresa);
                
            }
            for ($q=2;$q<=20;$q++) {
                $valornew = 'valor'.$q;
                $datanew = 'data'.$q;
                $descricaonew = 'descricao'.$q;
                $empresanew = 'empresa'.$q;
                
                    if (isset($_POST[$valornew]) && !empty($_POST[$valornew])) {
                    $data = addslashes($_POST[$datanew]);
                    $valor = addslashes($_POST[$valornew]);
                    $valor = str_replace(',','.', $valor);                
                    $descricao = addslashes(utf8_decode($_POST[$descricaonew]));
                    $empresa = addslashes(utf8_decode($_POST[$empresanew]));
                    $p->inserirPrestacaoItens($id_prestacao, $data, $valor, $descricao, $empresa);

                    }
            }
            
            header("Location: /novo/painel/viagem");
            
        }
        
        if (isset($_POST['vinculo_outra_prestacao']) && !empty($_POST['vinculo_outra_prestacao'])) { 
            $id_viagem = $id;            
            $vinculo_outra_prestacao = addslashes($_POST['vinculo_outra_prestacao']);
            $p->deletaPrestacao($id_prestacao);            
            $id_prestacao = $p->inserirPrestacaoVinculo($id_viagem, $vinculo_outra_prestacao);
            header("Location: /novo/painel/viagem");
        }
        
        $dados['dadosviagem'] = $dadosViagem;
        $dados['dadosprestacao'] = $dadosprestacao;
        
        $this->loadTemplate('prestacao_edit', $dados);
    }
    
    public function excluir($id) {
        $v = new Viagem();
        $p = new Prestacao();
        
        $id_prestacao = $p->getIdPrestacao($id);
        
        $id = addslashes($id);
        $p->deletaPrestacao($id_prestacao);
        $v->excluirViagem($id);
        header("Location: /novo/painel/viagem");        
    }
    public function prestacaoImp($id) {
        $dados = array();        
        $u = new Usuario();
        $v = new Viagem();    
        $p = new Prestacao();
        
        $id_funcionario = 0;
        $id_funcionario = $u->getFuncionarioId($_SESSION['lginteco']); 
        
        $dadosViagem = $v->getViagem($id);
        $id_prestacao = $p->getIdPrestacao($id);
        $nomes_clientes_vinculados = $p->getNomeClientesVinculados($id);
        
        
        $dadosprestacao = $p->getPrestacao($id_prestacao);
        
            $v = new Viagem();
            
            $dados['dadosviagem'] = $dadosViagem;
            $dados['nomesvinculados'] = $nomes_clientes_vinculados;
            $dados['dadosprestacao'] = $dadosprestacao;
            
            $this->loadLibrary('mpdf60/mpdf');
            
            ob_start();            
            $this->loadView('relprestacao_pdf', $dados);
            $html = ob_get_contents();
            ob_end_clean();
            
            $mpdf = new mPDF();
            $mpdf->WriteHTML($html);
            $mpdf->Output();        
    }
    public function imprimir($id) {
        $dados = array();
        
            
            $v = new Viagem();
            $dados['dadosviagem'] = $v->getViagem($id);
            
            $this->loadLibrary('mpdf60/mpdf');
            
            ob_start();            
            $this->loadView('relviagem_pdf', $dados);
            $html = ob_get_contents();
            ob_end_clean();
            
            $mpdf = new mPDF();
            $mpdf->WriteHTML($html);
            $mpdf->Output();        
    }
    public function imprimirHTML($id) {
        $dados = array();
        
            
            $v = new Viagem();
            $dados['dadosviagem'] = $v->getViagem($id);
            $dados['html'] = 'sim';
            
            $this->loadLibrary('mpdf60/mpdf');
            
            ob_start();            
            $this->loadView('relviagem_pdf', $dados);
            $html = ob_get_contents();
            ob_end_clean();
            
            $mpdf = new mPDF();
            
            echo $html;
                 
    }

}