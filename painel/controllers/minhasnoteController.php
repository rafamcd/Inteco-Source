<?php
class minhasnoteController extends Controller {

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
        $a = new Anotacao();
        
        $id_funcionario = 0;
        $id_funcionario = $u->getFuncionarioId($_SESSION['lginteco']);  
        
        $total_anotacoes = $a->getTotalAnotacoes($id_funcionario);
        
        $p = 1;	

	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$qtd_por_pagina = 5;
	$total_paginas = ceil($total_anotacoes / $qtd_por_pagina);

	$anotacoes = $a->getAnotacoes($p, $qtd_por_pagina, $id_funcionario);
        
        if (isset($_POST['anotacao']) && !empty($_POST['anotacao'])) {
            $anotacao = addslashes(utf8_decode($_POST['anotacao']));
            $a->inserir($id_funcionario, $anotacao);
            header("Location: /novo/painel/minhasnote");
            
        }
        
        $dados['anotacoes'] = $anotacoes;
        $dados['total_paginas'] = $total_paginas;
        $dados['p'] = $p;

        $this->loadTemplate('minhasnote', $dados);
    }
    public function excluir($id) {
        $a = new Anotacao;
        $id = addslashes($id);
        $a->excluirNote($id);
        header("Location: /novo/painel/minhasnote");        
    }

}